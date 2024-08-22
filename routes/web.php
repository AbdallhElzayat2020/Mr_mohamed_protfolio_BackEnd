<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\LandPage_1Controller;
use App\Http\Controllers\Frontend\LandPage_2Controller;
use App\Http\Controllers\Frontend\LandPage_3Controller;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/courses', [HomeController::class, 'courses'])->name('courses');

Route::get('/courses-details', [HomeController::class, 'courses_details'])->name('courses-details');

Route::get('/services', [HomeController::class, 'services'])->name('services');

Route::get('/services-details/{id}', [HomeController::class, 'services_details'])->name('services-details');

Route::get('/team', [HomeController::class, 'team'])->name('team');

Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');

Route::get('/gallery-details/{id}', [HomeController::class, 'gallery_details'])->name('gallery-details');

Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

Route::post('/orders', [OrderController::class, 'store'])->name('orders');

//LandPages Routes
Route::get('/land-page-1', [LandPage_1Controller::class, 'index'])->name('land-page-1');

Route::get('/land-page-2', [LandPage_2Controller::class, 'index'])->name('land-page-2');

Route::get('/land-page-3', [LandPage_3Controller::class, 'index'])->name('land-page-3');


//Login Routes for Users
//Route::get('/login', [AdminHomeController::class, 'login'])->name('login');
//Route::post('login', [AdminHomeController::class, 'handleLogin'])->name('handle-login');


// Route::get('/dashboard', [AdminHomeController::class, 'index'])->name('dashboard');
//
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

require __DIR__ . '/auth.php';
require __DIR__ . '/dashboard.php';
