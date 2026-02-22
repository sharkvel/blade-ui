<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\Response;
use Torchlight\Middleware\RenderTorchlight;

class CachingTorchlight extends RenderTorchlight
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $response = parent::handle($request, $next);

        $content = $response->getContent();

        defer(function () use ($content): void {
            $this->saveHighlightedBlocks($content);
        });

        return $response;
    }

    protected function saveHighlightedBlocks(string $html): void
    {
        $cacheDir = storage_path('torchlight/cache');
        File::ensureDirectoryExists($cacheDir);

        // Match each rendered torchlight <code> block
        preg_match_all(
            '/<code\b(?=[^>]*class="[^"]*torchlight[^"]*")(?=[^>]*data-torchlight-cache-key="([^"]+)")[^>]*>.*?<\/code>/s',
            $html,
            $matches,
            PREG_SET_ORDER
        );

        foreach ($matches as $match) {
            $block = $match[0];
            $key = $match[1];

            $path = "{$cacheDir}/{$key}.html";

            if (! File::exists($path)) {
                File::put($path, $block);
            }
        }

    }
}
