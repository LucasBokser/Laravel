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
Route::get('/', function () {
    return view('home/homepage');
});
*/


Route::get('/', [HomeController::class, 'index']);

Route::get('/catalogue', [ProductController::class, 'listProduct']);

Route::get('/product/{id}', [ProductController::class, 'product']);

Route::get('/contact', [CartController::class, 'cart']);

Route::get('/catalogue', [ProductController::class, 'productsByName']);


/*
Route::get('/membres', [\App\Http\Controllers\TeamController::class, 'ListeTeam']);

Route::get('/membres/{monPrenom}', [\App\Http\Controllers\TeamController::class, 'team']);
*/

