<?php

use App\Http\Controllers\Api\ProductCategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\MemberController;
use App\Http\Controllers\Api\VoucherController;
use App\Http\Controllers\Api\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/editproductcategory/{id}', [ProductCategoryController::class, 'edit'])->name('editproductcategory');
Route::post('/updateproductcategory', [ProductCategoryController::class, 'update'])->name('updateproductcategory');

Route::get('/editproduct/{id}', [ProductController::class, 'edit'])->name('editproduct');
Route::post('/updateproduct', [ProductController::class, 'update'])->name('updateproduct');

Route::get('/editvoucher/{id}', [VoucherController::class, 'edit'])->name('editvoucher');
Route::post('/updatevoucher', [VoucherController::class, 'update'])->name('updatevoucher');

Route::get('/editmember/{id}', [MemberController::class, 'edit'])->name('editmember');
Route::post('/updatemember', [MemberController::class, 'update'])->name('updatemember');

route::get('getproduct', [ProductController::class, 'index']);
route::post('postproduct', [ProductController::class, 'create']);
//Route::put('/putproduct', 'App\Http\Controllers\Api\ProductController@update');
Route::delete('/delproduct/{id}', 'App\Http\Controllers\Api\ProductController@destroy');

route::post('postproductcategory', [ProductCategoryController::class, 'create']);
route::get('getproductcategory', [ProductCategoryController::class, 'index']);
Route::delete('/delproductcat/{id}', 'App\Http\Controllers\Api\ProductCategoryController@destroy');
Route::put('/putproductcat', 'App\Http\Controllers\Api\ProductCategoryController@update');

route::get('getmember', [MemberController::class, 'index']);
route::post('postmember', [MemberController::class, 'create']);
Route::delete('/delmember/{id}', 'App\Http\Controllers\Api\MemberController@destroy');
Route::put('/putmember', 'App\Http\Controllers\Api\MemberController@update');

route::get('getvoucher', [VoucherController::class, 'index']);
route::post('postvoucher', [VoucherController::class, 'create']);
Route::delete('/delvoucher/{id}', 'App\Http\Controllers\Api\VoucherController@destroy');
Route::put('/putvoucher', 'App\Http\Controllers\Api\VoucherController@update');

Route::get('getcontact', [ContactController::class, 'index']);
Route::post('postcontact', [ContactController::class, 'create']);
Route::post('postcontact', [ContactController::class, 'create']);

Route::get('getreview', [ReviewController::class, 'index']);
Route::post('postreview', [ReviewController::class, 'create']);
Route::delete('/delreview/{id}', 'App\Http\Controllers\Api\ReviewController@destroy');
Route::get('/editreview/{id}', [ReviewController::class, 'edit'])->name('editreview');
Route::post('/updatereview', [ReviewController::class, 'update'])->name('updatereview');
