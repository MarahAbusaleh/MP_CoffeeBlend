<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Auth::routes(['verify' => true]);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /*----------------------------------------- CHECKOUT ------------------------------------------ */
    Route::get('/checkout/{discount}', [CheckoutController::class, 'index'])->name('checkout');
    Route::post('/submitCheckout/{discount}', [CheckoutController::class, 'submitCheckout'])->name('submitCheckout');
    Route::post('/submitCash/{discount}', [CheckoutController::class, 'submitCash'])->name('submitCash');
    Route::get('paypal/success', [CheckoutController::class, 'success'])->name('paypal_success');
    Route::get('paypal/cancel',  [CheckoutController::class, 'cancel'])->name('paypal_cancel');
    /*--------------------------------------- END CHECKOUT ---------------------------------------- */

    /*--------------------------------------- USER PROFILE ---------------------------------------- */
    Route::get('/myProfile', [UserController::class, 'myProfile'])->name('myProfile');
    Route::post('/editMyProfile', [UserController::class, 'editMyProfile'])->name('editMyProfile');
    Route::get('/myOrders/{id}', [UserController::class, 'myOrders'])->name('myOrders');
    /*----------------------------------- END USER PROFILE ---------------------------------------- */

    /*--------------------------------------- ADD REVIEW ---------------------------------------- */
    Route::post('/AddReview/{user_id}/{product_id}', [ProductController::class, 'AddReview'])->name('AddReview');
    /*----------------------------------- END ADD REVIEW  ---------------------------------------- */
});

//Home Page
Route::get('/', [HomeController::class, 'index'])->name('index');

//Menu Page
Route::get('/menuPage', [MenuController::class, 'show']);
Route::get('/showMenuPDF', [MenuController::class, 'showMenuPDF'])->name('showMenuPDF');
Route::get('/menuPage/pdf', [MenuController::class, 'menuPDF'])->name('menuPDF');

//Show Menu Item Details
Route::get('/itemDetails/{id}', [MenuController::class, 'itemDetails'])->name('itemDetails');

//Show all Categories
Route::get('/shop', [CategoryController::class, 'show'])->name('shop');

//Show Products in each Category
Route::get('/showProducts/{id}', [CategoryController::class, 'showProducts'])->name('showProducts');

//Show Product Details
Route::get('/productDetails/{category_id}/{product_id}', [ProductController::class, 'show'])->name('productDetails');

//Search Products
Route::get('/search', [ProductController::class, 'searchProduct'])->name('search');

/*--------------------------------------------- CART --------------------------------------------- */

Route::controller(CartController::class)->group(function () {
    Route::get('/cart', 'index')->name('cart');
    //Add Menu Item To Cart
    Route::get('/addItemToCart/{id}', 'addItemToCart')->name('addItemToCart');
    //Add Menu Item To Cart
    Route::get('/addProductToCart/{id}', 'addProductToCart')->name('addProductToCart');

    Route::get('/qtyInc/{id}', 'qtyInc')->name('qtyInc');
    Route::get('/qtyDec/{id}', 'qtyDec')->name('qtyDec');
    Route::get('/removeFromCart/{id}', 'removeFromCart')->name('removeFromCart');
    Route::post('handleCoupon', 'handleCoupon')->name('handleCoupon');
});

/*------------------------------------------- END CART -------------------------------------------- */

//Services Page
Route::get('/services', function () {
    return view('Pages.services');
});

//About Us Page
Route::get('/about', function () {
    return view('Pages.about');
})->name('about');

//Contact Us Page
Route::get('/contact_us', function () {
    return view('Pages.contact');
})->name('contact_us');
Route::post('store-contact', [ContactMessageController::class, 'store'])->name('store.contact');

//FallBack Route (404)
// Route::fallback(function () {
//     return view('Pages.404Error');
// });

/*----------------------------------- Login With google & Facebook -----------------------------------*/

Route::get('auth/google', [GoogleController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleController::class, 'callbackGoogle']);

Route::get('auth/facebook', [FacebookController::class, 'facebookPage'])->name('facebook-auth');
Route::get('auth/facebook/callback', [FacebookController::class, 'facebookredirect']);

require __DIR__ . '/auth.php';
