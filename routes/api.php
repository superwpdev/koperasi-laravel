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
route::get('getproduct', [ProductController::class, 'index']);
route::post('postproduct', [ProductController::class, 'create']);
// Route::put('/putproduct', 'App\Http\Controllers\Api\ProductController@update');
Route::put('putproduct/{id}', [ProductController::class, 'update']);
// Route::delete('/delproduct', 'App\Http\Controllers\Api\ProductController@destroy');
Route::delete('delproduct/{id}', [ProductController::class, 'destroy']);

// Route::resource('/product', ProductController::class);

route::post('postproductcategory', [ProductCategoryController::class, 'create']);
route::get('getproductcategory', [ProductCategoryController::class, 'index']);
Route::delete('delproductcat/{id}', [ProductCategoryController::class, 'destroy']);
Route::put('putproductcat/{id}', [ProductCategoryController::class, 'update']);

route::get('getmember', [MemberController::class, 'index']);
route::post('postmember', [MemberController::class, 'create']);
Route::delete('/delmember/{id}', 'App\Http\Controllers\Api\MemberCategoryController@destroy');
Route::put('/putmember', 'App\Http\Controllers\Api\MemberCategoryController@update');

route::get('getvoucher', [VoucherController::class, 'index']);
route::post('postvoucher', [VoucherController::class, 'create']);
Route::delete('/delvoucher/{id}', 'App\Http\Controllers\Api\VoucherCategoryController@destroy');
Route::put('/putvoucher', 'App\Http\Controllers\Api\VoucherCategoryController@update');

route::get('getcontact', [ContactController::class, 'index']);
route::post('postcontact', [ContactController::class, 'create']);