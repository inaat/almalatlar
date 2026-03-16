<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    public function show($slug)
    {
        $service = Service::with('category')->where('slug', $slug)->firstOrFail();
        return view('service.show', compact('service'));
    }
}
