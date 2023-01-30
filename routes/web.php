<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MemberController;
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
    return view('/admin/layout/layout');
});

Route::get('/product', [ProductController::class, 'index'])->name('product.list');
Route::get('/postproduct', [ProductController::class, 'create']);
Route::post('/storemember', [MemberController::class, 'store']);
Route::get('/editproduct/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/updateproduct', [ProductController::class, 'update'])->name('product.update');
Route::post('/deleteproduct/{id}', [ProductController::class, 'delete'])->name('product.delete');


Route::get('/member', [MemberController::class, 'index'])->name('member.list');
Route::get('/addmember', [MemberController::class, 'create']);
Route::post('/storemember', [MemberController::class, 'store']);
Route::get('/editmember/{id}', [MemberController::class, 'edit'])->name('member.edit');
Route::post('/updatemember', [MemberController::class, 'update'])->name('updatemember');
Route::get('/deletemember/{id}', [MemberController::class, 'destroy'])->name('deletemember');

Route::get('/voucher', [ProductVoucherController::class, 'index'])->name('voucher.list');
Route::post('/postvoucher', [ProductVoucherController::class, 'create'])->name('voucher.add');
Route::get('/editvoucher', [ProductVoucherController::class, 'edit'])->name('voucher.edit');
Route::post('/updatevoucher', [ProductVoucherController::class, 'update'])->name('voucher.update');
Route::post('/deletevoucher', [ProductVoucherController::class, 'delete'])->name('voucher.delete');

Route::get('/category', [ProductCategoryController::class, 'index'])->name('category.list');
Route::post('/postcategory', [ProductCategoryController::class, 'create'])->name('category.add');
Route::get('/editcategory', [ProductCategoryController::class, 'edit'])->name('category.edit');
Route::post('/updatecategory', [ProductCategoryController::class, 'update'])->name('category.update');
Route::post('/deletecategory', [ProductCategoryController::class, 'delete'])->name('category.delete');