<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\MemberController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/product', [ProductController::class, 'index'])->name('product.list');
Route::post('/product-create', [ProductController::class, 'store'])->name('product.create');
Route::get('/product-edit', [ProductController::class, 'edit'])->name('product.edit');
Route::get('/product-update', [ProductController::class, 'update'])->name('product.update');
Route::get('/product-delete', [ProductController::class, 'delete'])->name('product.delete');