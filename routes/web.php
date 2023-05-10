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

Route::get('user/1',[ProductController::class, 'user1'])->name('user1');
Route::get('user/2',[ProductController::class, 'user2'])->name('user2');
Route::get('user/3',[ProductController::class, 'user3'])->name('user3');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
