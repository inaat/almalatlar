<?php

namespace App\Providers;

use App\Models\ServiceCategory;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        if (Schema::hasTable('service_categories')) {
            View::share('navServiceCategories', ServiceCategory::with('services')->where('is_active', true)->orderBy('sort_order')->get());
        } else {
            View::share('navServiceCategories', collect());
        }

        if (Schema::hasTable('site_settings')) {
            View::share('siteSettings', SiteSetting::all()->keyBy('key'));
        } else {
            View::share('siteSettings', collect());
        }
    }
}
