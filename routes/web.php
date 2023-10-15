<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

    /*----------------------------------------- CHECKOUT ------------------------------------------ */
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
    Route::post('/submitCheckout', [CheckoutController::class, 'submitCheckout'])->name('submitCheckout');
    /*--------------------------------------- END CHECKOUT ---------------------------------------- */

    /*--------------------------------------- USER PROFILE ---------------------------------------- */
    Route::get('/myProfile', [UserController::class, 'myProfile'])->name('myProfile');
    Route::post('/editMyProfile', [UserController::class, 'editMyProfile'])->name('editMyProfile');
    Route::get('/myOrders/{id}', [UserController::class, 'myOrders'])->name('myOrders');
    /*----------------------------------- END USER PROFILE ---------------------------------------- */
});

//My Routes

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/menupage', [MenuController::class, 'show']);

//Show Menu Item Details
Route::get('/itemDetails/{id}', [MenuController::class, 'itemDetails'])->name('itemDetails');

Route::get('/services', function () {
    return view('Pages.services');
});

//Show all Categories
Route::get('/shop', [CategoryController::class, 'show']);

//Show Products in each Category
Route::get('/showProducts/{id}', [CategoryController::class, 'showProducts'])->name('showProducts');

//Show Product Details
Route::get('/productDetails/{category_id}/{product_id}', [ProductController::class, 'show'])->name('productDetails');

Route::get('/about', function () {
    return view('Pages.about');
});

Route::get('/testttt', function () {
    return view('Pages.subcategories');
});

Route::get('/contact', function () {
    return view('Pages.contact');
});

/*--------------------------------------------- CART --------------------------------------------- */
Route::get('/cart', [CartController::class, 'index'])->name('cart');
//Add Menu Item To Cart
Route::get('/addItemToCart/{id}', [CartController::class, 'addItemToCart'])->name('addItemToCart');

//Add Menu Item To Cart
Route::get('/addProductToCart/{id}', [CartController::class, 'addProductToCart'])->name('addProductToCart');

Route::get('/qtyInc/{id}', [CartController::class, 'qtyInc'])->name('qtyInc');
Route::get('/qtyDec/{id}', [CartController::class, 'qtyDec'])->name('qtyDec');
Route::get('/removeFromCart/{id}', [CartController::class, 'removeFromCart'])->name('removeFromCart');
/*------------------------------------------- END CART -------------------------------------------- */



require __DIR__ . '/auth.php';
