<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;




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
/*
Route::get('/', function () {
    return view('welcome_hello');
});
*/
/*
Route::get('/home', function () {
    return view('home/homepage');
});

Route::get('/products', function () {
    return view('products/product-list');
});

Route::get('/products', function () {
    return view('products/product-details');
});

Route::get('/cart', function () {
    return view('cart/cart');
});
*/

Route::get('/',[HomeController::class,'index']);

Route::get('/product',[ProductController::class,'listProduct']);

Route::get('/product/{id}',[ProductController::class,'product']);

Route::get('/cart',[CartController::class,'cart']);

