<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;


// Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');


Route::group(
    [
        'prefix' => 'dashboard',
        'as' => 'dashboard',
        'middleware' => ['auth', 'verified']
    ]
    , function () {
    Route::get('/', [HomeController::class, 'index']);

});