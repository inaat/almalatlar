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
        $slides   = SliderSlide::where('is_active', true)->orderBy('sort_order')->get();
        $clients  = Client::where('is_active', true)->orderBy('sort_order')->get();
        $services = Service::where('is_active', true)->orderBy('sort_order')->get();
        $counters = Counter::where('is_active', true)->orderBy('sort_order')->get();
        $aboutTabs = AboutTab::orderBy('sort_order')->get();

        return view('home', compact('slides', 'clients', 'services', 'counters', 'aboutTabs'));
    }
}
