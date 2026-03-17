<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Partner;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\SliderSlide;
use App\Models\SiteSetting;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'slides'     => SliderSlide::count(),
            'categories' => ServiceCategory::count(),
            'services'   => Service::count(),
            'partners'   => Partner::count(),
            'clients'    => Client::count(),
            'settings'   => SiteSetting::count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
