<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MemberController;
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

Route::get('/product', [ProductController::class, 'index'])->name('product.list');
Route::get('/product-add', [ProductController::class, 'create'])->name('product.add');
Route::get('/product-create', [ProductController::class, 'store'])->name('product.create');
Route::get('/product-edit', [ProductController::class, 'edit'])->name('product.edit');
Route::get('/product-update', [ProductController::class, 'update'])->name('product.update');
Route::get('/product-delete', [ProductController::class, 'delete'])->name('product.delete');


Route::get('/member', [MemberController::class, 'index'])->name('member.list');
Route::get('/member-add', [MemberController::class, 'create'])->name('member.add');
Route::get('/member-create', [MemberController::class, 'store'])->name('member.create');
Route::get('/member-edit', [MemberController::class, 'edit'])->name('member.edit');
Route::get('/member-update', [MemberController::class, 'update'])->name('member.update');
Route::get('/member-delete', [MemberController::class, 'delete'])->name('member.delete');



Route::post('/postnews', [NewsController::class, 'store'])->name('postnews');
Route::post('/postcategory', [CategoryController::class, 'store'])->name('postcategory');
