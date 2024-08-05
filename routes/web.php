<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;




Route::get('/', [HomeController::class, 'index'])->name('home');

//DASHBOARD
//Route::get('/dashboard', function () {
//    return view('admin.index');
//})->name('home');


//import dashboard Route (admin Route)
require __DIR__ . '/dashboard.php';
