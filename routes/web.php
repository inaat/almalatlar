<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\ServiceCategoryController;
use App\Http\Controllers\Admin\AdminServiceController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\AboutPageController as AdminAboutPageController;
use App\Http\Controllers\Admin\AboutHistoryController;
use App\Http\Controllers\Admin\AboutTabController;
use App\Http\Controllers\Admin\AboutSettingController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TeamMemberController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use Illuminate\Support\Facades\Route;
Route::get('/welcome', function () {
    $slides = \App\Models\SliderSlide::where('is_active', true)->orderBy('sort_order')->get();
    return view('welcomeEnglish', compact('slides'));
});
Route::get('/welcome-ar', function () {
    $slides = \App\Models\SliderSlide::where('is_active', true)->orderBy('sort_order')->get();
    return view('welcomeArabic', compact('slides'));
});
Route::get('/lang/{locale}', function (string $locale) {
    if (in_array($locale, ['en', 'ar'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('lang.switch');

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', fn() => view('about'));
Route::get('/contact', fn() => view('contact'));
Route::get('/about/{slug}', [AboutPageController::class, 'show']);


Route::get('/product/{slug}', [ProductController::class, 'show']);

// Services
Route::get('/service', fn() => view('service.index'));
Route::get('/service/{slug}', [ServiceController::class, 'show']);

// Admin Auth
Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// Admin Panel
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('slides', SlideController::class);
    Route::resource('categories', ServiceCategoryController::class);
    Route::resource('services', AdminServiceController::class);
    Route::resource('partners', PartnerController::class);
    Route::resource('clients', ClientController::class);
    Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
    Route::post('settings', [SettingController::class, 'update'])->name('settings.update');

    Route::get('about', [AboutSettingController::class, 'index'])->name('about.index');
    Route::post('about', [AboutSettingController::class, 'update'])->name('about.update');

    Route::resource('products', AdminProductController::class);
    Route::resource('about-pages', AdminAboutPageController::class);
    Route::resource('about-tabs', AboutTabController::class);
    Route::resource('about-history', AboutHistoryController::class);
    Route::resource('team-members', TeamMemberController::class);
    Route::resource('testimonials', TestimonialController::class);
});
