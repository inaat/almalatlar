<?php
namespace App\Http\Controllers;
use App\Models\Client;

class CustomersClientsController extends Controller {
    public function index() {
        $clients = Client::where('is_active', true)->orderBy('sort_order')->get();
        return view('customers-clients', compact('clients'));
    }
}
