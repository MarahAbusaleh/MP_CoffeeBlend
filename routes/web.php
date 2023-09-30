<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//My Routes

Route::get('/', [HomeController::class, 'index']);

Route::get('/menupage', [MenuController::class, 'show']);

Route::get('/services', function () {
    return view('Pages.services');
});

Route::get('/shop', function () {
    return view('Pages.shop');
});

Route::get('/about', function () {
    return view('Pages.about');
});

Route::get('/contact', function () {
    return view('Pages.contact');
});



require __DIR__ . '/auth.php';
