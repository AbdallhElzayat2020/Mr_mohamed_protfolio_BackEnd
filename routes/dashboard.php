<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;





Route::group(
    [
        'prefix' => 'admin',
        'as' => 'admin.',
    ], function () {
    Route::get('login', [AdminAuthController::class, 'login'])->name('login');
    Route::post('login', [AdminAuthController::class, 'handleLogin'])->name('handle-login');
});

//Protected Routes
Route::group(
    [
        'prefix' => 'admin',
        'as' => 'admin.',
        'middleware' => ['admin'],
    ], function () {
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::post('logout', [AdminAuthController::class, 'logout'])->name('logout');

});
