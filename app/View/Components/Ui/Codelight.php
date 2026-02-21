<?php

namespace App\View\Components\Ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Codelight extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $language = 'blade',
        public ?string $path = null
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return function ($data) {
            $content = $this->getContent() ?? trim((string) $data['slot']->toHtml());
            $cacheKey = md5($this->language . ($content ?? ''));
            $contentCache = $this->getCache($cacheKey);

            return view('components.ui.codelight', compact('content', 'contentCache', 'cacheKey'));
        };
    }

    protected function getCache($key): string|null
    {
        // We can't know the final rendered hash at this point,
        // so use a content-based key you control
        $path = storage_path("torchlight/cache/{$key}.html");

        return file_exists($path) ? file_get_contents($path) : null;
    }

    protected function getContent(): string|null
    {
        if (filled($this->path)) {
            $path = resource_path('views/' . $this->path);
            return file_exists($path) ? trim(file_get_contents($path)) : null;
        }

        return null;
    }
}
