<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\FrontEnd\CategoryController;
use App\Http\Controllers\FrontEnd\SearchController;
use App\Http\Controllers\FrontEnd\ProductDetailController;
use App\Http\Controllers\Login\LoginController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::get('/category', [CategoryController::class, 'index'])->name('category');

Route::get('/product-detail', [ProductDetailController::class, 'index'])->name('detail-product');

Route::get('/signin', [LoginController::class, 'signin'])->name('signin');

Route::get('/register', [LoginController::class, 'register'])->name('register');


