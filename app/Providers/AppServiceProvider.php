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
            View::share('siteSettings', SiteSetting::all()->keyBy('key'));
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
