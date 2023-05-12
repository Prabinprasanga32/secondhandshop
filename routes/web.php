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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('product/camera',[ProductController::class, 'camera'])->name('camera');
Route::get('product/bag',[ProductController::class, 'bag'])->name('bag');
Route::get('product/bottle',[ProductController::class, 'bottle'])->name('bottle');
