<?php

namespace App\Http\Controllers;

use App\Models\AboutPage;
use App\Models\Client;
use App\Models\Partner;

class AboutPageController extends Controller
{
    public function show($slug)
    {
        $page = AboutPage::where('slug', $slug)->where('is_active', true)->firstOrFail();

        $data = ['page' => $page];

        if ($slug === 'customers-clients') {
            $data['clients'] = Client::where('is_active', true)->orderBy('sort_order')->get();
        } elseif ($slug === 'partners') {
            $data['partners'] = Partner::where('is_active', true)->orderBy('sort_order')->get();
        }

        return view('about-pages.show', $data);
    }
}
