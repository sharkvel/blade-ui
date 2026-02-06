<?php

namespace Sharkvel\BladeUi\Console\Commands;

use Exception;
use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

use function Laravel\Prompts\select;
use function Laravel\Prompts\spin;

class InitCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ui:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initialize UI components in your application';

    protected $sourceRoot = 'https://raw.githubusercontent.com/sharkvel/blade-ui-showcase/main';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->basicSetup();
        $this->themeSetup();
    }

    /**
     * Setup basic
     */
    private function basicSetup()
    {
        /**
         * Install basic css code
         */
        $response = spin(function () {
            try {
                $appCssPath = resource_path('css/app.css');

                if (!File::exists($appCssPath)) {
                    throw new Exception("app.css not found");
                }

                $content = File::get($appCssPath);

                // Get app.css stub
                $client = new Client;
                $result = $client->get($this->sourceRoot . '/resources/stubs/app.css', ['headers' => ['Accept' => 'text/plain']]);
                $stubAppCssContent = $result->getBody()->getContents();

                File::put($appCssPath, "{$content}\n{$stubAppCssContent}");

                return "<fg=green>✔</> Basic setup is finished";

            } catch (\Throwable $th) {
                return "<fg=red>✖</> {$th->getMessage()}";
            }
        }, 'Setting up basic...');

        $this->line($response);
    }

    /**
     * Setup theme
     */
    private function themeSetup()
    {
        $theme = select("Select theme:", ["Neutral", "Blue", "Yellow"], 0);
        $theme = match ($theme) {
            "Neutral" => 'neutral',
            "Blue" => 'blue',
            "Yellow" => 'yellow'
        };

        $response = spin(function () use ($theme) {
            try {
                $appCssPath = resource_path('css/app.css');

                if (!File::exists($appCssPath)) {
                    throw new Exception("app.css not found");
                }

                $content = File::get($appCssPath);

                // Get theme stub
                $client = new Client;
                $result = $client->get($this->sourceRoot . "/resources/stubs/themes/{$theme}.css", ['headers' => ['Accept' => 'text/plain']]);
                $stubThemeContent = $result->getBody()->getContents();

                File::put($appCssPath, "{$content}\n{$stubThemeContent}");

                return "<fg=green>✔</> Theme setup is finished";

            } catch (\Throwable $th) {
                return "<fg=red>✖</> {$th->getMessage()}";
            }
        }, 'Setting up theme...');

        $this->line($response);
    }
}
