<?php

namespace App\Providers;

use App\Services\Constants;
use Carbon\CarbonImmutable;
use Date;
use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
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
        // For Dates
        Date::use(CarbonImmutable::class);

        // For Views
        View::composer(['components.sidebar', 'components.nav-bar', 'pages.components'], function ($view): void {
            $view->with('sidebarItems', Constants::sidebarItems());
        });
        View::composer(['components.nav-bar'], function ($view): void {
            $view->with('searchStaticContent', Constants::searchStaticContent());
        });
    }
}
