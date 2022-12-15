<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CartController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\VoucherController;



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

Route::get('/fcart',[CartController::class, 'index'])->name('cart.index');
Route::post('/fcart',[CartController::class, 'index'])->name('cart.create');

Route::get('/fmember',[MemberController::class, 'index'])->name('member.index');
Route::post('/fmember',[MemberController::class, 'index'])->name('member.create');

Route::get('/fproduct',[ProductController::class, 'index'])->name('product.index');
Route::post('/fproduct',[ProductController::class, 'index'])->name('product.create');

Route::get('/fproductcategory',[ProductCategoryController::class, 'index'])->name('productcategory.index');
Route::post('/fproductcategory',[ProductCategoryController::class, 'index'])->name('productcategory.create');

Route::get('/fvoucher',[VoucherController::class, 'index'])->name('voucher.index');
Route::post('/fvoucher',[VoucherController::class, 'index'])->name('voucher.create');

