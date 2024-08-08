<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Admin\BannerHomeController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;


Route::group(
    [
        'prefix' => 'admin',
        'as' => 'admin.',
    ], function () {
    Route::get('login', [AdminAuthController::class, 'login'])->name('login');
    Route::post('login', [AdminAuthController::class, 'handleLogin'])->name('handle-login');
    Route::post('logout', [AdminAuthController::class, 'logout'])->name('logout');

});

//Protected Routes
Route::group(
    [
        'prefix' => 'admin',
        'as' => 'admin.',
        'middleware' => ['admin']
    ], function () {
    Route::get('dashboard', [AdminHomeController::class, 'index'])->name('dashboard');

    Route::resource('homepage', BannerHomeController::class);

    Route::resource('company', CompanyController::class);

    Route::resource('testimonial', TestimonialController::class);

    Route::resource('orders', AdminOrderController::class);

    Route::get('users', [UsersController::class, 'index'])->name('users');

    Route::resource('services', ServiceController::class);


});
