<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'home.index');

Route::redirect('/home', '/')->name('home.redirect');

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login.store');

Route::prefix('user')->group(function () {
    Route::get('orders', [OrderController::class, 'index'])->name('user.orders');
    Route::get('orders/create', [OrderController::class, 'create'])->name('user.orders.create');
    Route::post('orders', [OrderController::class, 'store'])->name('user.orders.store');
});

Route::prefix('admin')->group(function () {
    Route::get('orders', [OrderController::class, 'index'])->name('admin.orders');
    Route::get('orders/create', [OrderController::class, 'create'])->name('admin.orders.create');
    Route::post('orders', [OrderController::class, 'store'])->name('admin.orders.store');
});