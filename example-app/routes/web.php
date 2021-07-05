<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BackOfficeController;
use App\Http\Controllers\CategoryController;
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
/*
Route::get('/', function () {
    return view('welcome_hello');
});
*/

Route::get('/layout', function () {
    return view('Layout');
});



Route::get('/', [HomeController::class, 'index']);

Route::get('/catalogue', [ProductController::class, 'listProduct']);

Route::get('/product/{id}', [ProductController::class, 'product']);

Route::get('/contact', [CartController::class, 'cart']);

Route::get('/catalogue', [ProductController::class, 'productsByName']);

Route::get('/catalogue', [ProductController::class, 'productsByPrice']);




Route::resource('backoffice/product', BackOfficeController::class);

Route::get('backoffice/product/category/{id}/product', [BackOfficeController::class, 'index'])->name('product.category');

Route::resource('backoffice/category', CategoryController::class);

Route::resource('backoffice/order', OrderController::class);

/*
Route::get('/membres', [\App\Http\Controllers\TeamController::class, 'ListeTeam']);

Route::get('/membres/{monPrenom}', [\App\Http\Controllers\TeamController::class, 'team']);
*/

