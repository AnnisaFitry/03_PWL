<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageCont;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//p
Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/shop-detail', function () {
    return view('shop-detail');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/my-account', function () {
    return view('my-account');
});
Route::get('/wishlist', function () {
    return view('wishlist');
});
Route::get('/contact-us', [PageCont::class, 'ContactUs']);
Route::get('/gallery', [PageCont::class, 'Gallery']);