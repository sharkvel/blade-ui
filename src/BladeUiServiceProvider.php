<?php

namespace Sharkvel\BladeUi;

use Sharkvel\BladeUi\Console\Commands\AddCommand;
use Sharkvel\BladeUi\Console\Commands\InitCommand;
use Illuminate\Support\ServiceProvider;

class BladeUiServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InitCommand::class,
                AddCommand::class,
            ]);
        }
    }
}