<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductVoucherController;


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

Route::get('/fcart',[CartController::class,'Index'])->name('cart.index');
Route::get('/fmember',[MemberController::class,'Index'])->name('member.index');
Route::get('/fproduct',[ProductController::class,'Index'])->name('product.index');
Route::get('/fproductcategory',[ProductCategoryController::class,'Index'])->name('productcategory.index');
Route::get('/fvoucher',[ProductVoucherController::class,'Index'])->name('voucher.index');