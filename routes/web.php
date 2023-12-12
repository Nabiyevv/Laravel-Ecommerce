<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Shop\ShopController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[HomeController::class,'index'])->name('homeView');
Route::get('/shop/{id}/{slug}',[ShopController::class,'index'])->name('shopView');
Route::get('/cart',fn() => view('frontend.cart'))->name('cartView');
Route::get('/about',fn() => view('frontend.about'))->name('aboutView');
Route::get('/contact',fn() => view('frontend.contact'))->name('contactView');
Route::get('/checkout',fn() => view('frontend.checkout'))->name('checkoutView');
Route::get('/product/{slug}',[ProductController::class,'productDetail'])->name('detailView');
// Route::get('/product/{slug}',fn() => view('frontend.product-detail'))->name('detailView');

Route::get('/test',[Controller::class,'index']);



Route::post('/subscribe',[HomeController::class,'subscribe'])->name('subscribe');