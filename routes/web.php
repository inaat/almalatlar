<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', fn() => view('about'));
Route::get('/contact', fn() => view('contact'));
Route::get('/customers-clients', fn() => view('customers-clients'));
Route::get('/partners', fn() => view('partners'));
Route::get('/team-details', fn() => view('team-details'));
Route::get('/it-hardware-software', fn() => view('it-hardware-software'));
Route::get('/it-passive-equipment', fn() => view('it-passive-equipment'));

// Services
Route::get('/service', fn() => view('service.index'));
Route::get('/service/{slug}', [ServiceController::class, 'show']);
