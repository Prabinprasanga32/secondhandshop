<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/post', function () {
    return view('layouts/productpost');
});

Auth::routes();
Route::POST('add_product',[ProductController::class,'store'])->name('add_product');
Route::get('show_product',[ProductController::class,'show'])->name('show_product');

<<<<<<< HEAD
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('product/camera',[ProductController::class, 'camera'])->name('camera');
Route::get('product/bag',[ProductController::class, 'bag'])->name('bag');
Route::get('product/bottle',[ProductController::class, 'bottle'])->name('bottle');
=======
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> upstream/version2
