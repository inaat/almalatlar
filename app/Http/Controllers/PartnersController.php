<?php
namespace App\Http\Controllers;
use App\Models\Partner;

class PartnersController extends Controller {
    public function index() {
        $partners = Partner::where('is_active', true)->orderBy('sort_order')->get();
        return view('partners', compact('partners'));
    }
}
