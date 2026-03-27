<?php

namespace App\Http\Controllers;

use App\Models\AboutTab;
use App\Models\Client;
use App\Models\Counter;
use App\Models\Service;
use App\Models\SliderSlide;

class HomeController extends Controller
{
    public function index()
    {
        $slides      = \App\Models\SliderSlide::where('is_active', true)->orderBy('sort_order')->get();
    $categories  = \App\Models\ServiceCategory::where('is_active', true)->orderBy('sort_order')->get();
    $services    = \App\Models\Service::where('is_active', true)->orderBy('sort_order')->get();
    $aboutTabs   = \App\Models\AboutTab::orderBy('sort_order')->get();
    $partners    = \App\Models\Partner::where('is_active', true)->orderBy('sort_order')->get();
    $counters    = \App\Models\Counter::where('is_active', true)->orderBy('sort_order')->get();
    return view('welcome', compact('slides', 'categories', 'services', 'aboutTabs', 'partners', 'counters'));
    }
}
