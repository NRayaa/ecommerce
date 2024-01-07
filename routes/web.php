<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard');

// Route untuk menampilkan halaman login
Route::get('/login', function(){
    return view('auth.login');
})->name('login');
// Route untuk melakukan proses login
Route::post('/login', [AuthController::class, 'login'])->name('login');
// Route untuk logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::resource('/dashboard/category-content', \App\Http\Controllers\ContentCategoryController::class);
Route::resource('/dashboard/hero', \App\Http\Controllers\HeroController::class);
Route::resource('/dashboard/product', \App\Http\Controllers\ProductController::class);
Route::resource('/dashboard/voucher', \App\Http\Controllers\VoucherController::class);
Route::resource('/dashboard/promo', \App\Http\Controllers\PromoController::class);

