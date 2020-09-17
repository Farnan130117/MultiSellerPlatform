<?php

use Illuminate\Support\Facades\Route;

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
//Index section
Route::get('/', function () {
    return view('index');
});
//shop section
Route::get('/shop', function () {
    return view('shop.shop');
})->name('shop');

//product-details section
Route::get('/product-details', function () {
    return view('product-details.product-details');
})->name('product-details');

//cart section
Route::get('/cart', function () {
    return view('cart.cart');
})->name('cart');

//checkout section
Route::get('/checkout', function () {
    return view('checkout.checkout');
})->name('checkout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
