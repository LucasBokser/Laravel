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

//bières

Route::get('/bières/biquette', function () {
    return view('bières.biquette');
});

Route::get('/bières/grizzly', function () {
    return view('grizzly');
});

Route::get('/bières/lion', function () {
    return view('bières.lion');
});

Route::get('bières/rakoon', function () {
    return view('bières.rakoon');
});




//cv

Route::get('/cv/cv-aurel', function () {
    return view('cv.cv-aurel');
});

Route::get('/cv/cv-hercule', function () {
    return view('cv-hercule');
});

Route::get('/cv/cv-hubert', function () {
    return view('cv.cv-hubert');
});

Route::get('cv/cv-lucie', function () {
    return view('cv.cv-lucie');
});




Route::get('/',[HomeController::class,'index']);

Route::get('/catalogue',[ProductController::class,'listProduct']);

Route::get('/product/{id}',[ProductController::class,'product']);

Route::get('/cart',[CartController::class,'cart']);

Route::get('/membres',[\App\Http\Controllers\TeamController::class,'ListeTeam']);

Route::get('/membres/{monPrenom}',[\App\Http\Controllers\TeamController::class,'team']);


