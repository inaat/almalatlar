<?php

namespace App\Providers;

use App\Models\AboutHistory;
use App\Models\AboutPage;
use App\Models\AboutTab;
use App\Models\Product;
use App\Models\ServiceCategory;
use App\Models\SiteSetting;
use App\Models\TeamMember;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        try {
            \Illuminate\Support\Facades\DB::connection()->getPdo();
        } catch (\Exception $e) {
            View::share('navServiceCategories', collect());
            View::share('aboutHistories', collect());
            View::share('aboutTabs', collect());
            View::share('navAboutPages', collect());
            View::share('navProducts', collect());
            View::share('siteSettings', collect());
            View::share('teamMembers', collect());
            View::share('testimonials', collect());
            return;
        }

        if (Schema::hasTable('service_categories')) {
            View::share('navServiceCategories', ServiceCategory::with('services')->where('is_active', true)->orderBy('sort_order')->get());
        } else {
            View::share('navServiceCategories', collect());
        }

        if (Schema::hasTable('about_histories')) {
            View::share('aboutHistories', AboutHistory::orderBy('sort_order')->get());
        } else {
            View::share('aboutHistories', collect());
        }

        if (Schema::hasTable('about_tabs')) {
            View::share('aboutTabs', AboutTab::orderBy('sort_order')->get());
        } else {
            View::share('aboutTabs', collect());
        }

        if (Schema::hasTable('about_pages')) {
            View::share('navAboutPages', AboutPage::where('is_active', true)->orderBy('sort_order')->get());
        } else {
            View::share('navAboutPages', collect());
        }

        if (Schema::hasTable('products')) {
            View::share('navProducts', Product::where('is_active', true)->orderBy('sort_order')->get());
        } else {
            View::share('navProducts', collect());
        }

        if (Schema::hasTable('site_settings')) {
            View::composer('*', function ($view) {
                $all = SiteSetting::all()->keyBy('key');
                $locale = app()->getLocale();

                // For each base key, if an _ar version exists and locale is ar, swap value
                $settings = $all->filter(fn($s) => !str_ends_with($s->key, '_ar'));

                if ($locale === 'ar') {
                    $settings->each(function ($setting) use ($all) {
                        $arKey = $setting->key . '_ar';
                        if ($all->has($arKey) && !empty($all[$arKey]->value)) {
                            $setting->value = $all[$arKey]->value;
                        }
                    });
                }

                $view->with('siteSettings', $settings);
            });
        } else {
            View::share('siteSettings', collect());
        }

        if (Schema::hasTable('team_members')) {
            View::share('teamMembers', TeamMember::where('is_active', true)->orderBy('sort_order')->get());
        } else {
            View::share('teamMembers', collect());
        }

        if (Schema::hasTable('testimonials')) {
            View::share('testimonials', Testimonial::where('is_active', true)->orderBy('sort_order')->get());
        } else {
            View::share('testimonials', collect());
        }
    }
}
