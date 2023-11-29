<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Route;


Route::get('adminLogin', [AdminController::class, 'login'])->name('adminLogin');

Route::middleware(['admin', 'role:admin'])->group(function () {

    Route::get('AdminDashboard', [AdminController::class, 'AdminDashboard'])->name('AdminDashboard');

    Route::get('profileAdmin', [AdminController::class, 'profileAdmin'])->name('profileAdmin');

    Route::post('editAdminInfo', [AdminController::class, 'editAdminInfo'])->name('editAdminInfo');

    Route::post('editAdminPass', [AdminController::class, 'editAdminPass'])->name('editAdminPass');

    Route::resource('category', CategoryController::class);

    Route::resource('product', ProductController::class);

    Route::resource('menu', MenuController::class);

    Route::resource('order', OrderController::class);
    Route::post('order/export', 'OrderController@index');

    Route::resource('order_item', OrderItemController::class);

    Route::resource('user', UserController::class);

    Route::resource('discount', DiscountController::class);

    Route::resource('comment', CommentController::class);

    Route::resource('contact', ContactMessageController::class);
});
