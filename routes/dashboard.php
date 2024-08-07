<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminHomePageController;
use App\Http\Controllers\Admin\BannerHomeController;
use App\Http\Controllers\Admin\CompanyController;
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
        'middleware' => ['admin'],
    ], function () {
    Route::get('dashboard', [AdminHomeController::class, 'index'])->name('dashboard');


    Route::resource('homepage', BannerHomeController::class);

    Route::resource('company', CompanyController::class);
});
