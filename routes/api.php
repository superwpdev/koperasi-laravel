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
Route::put('/putproduct', 'App\Http\Controllers\Api\ProductController@update');
Route::delete('/delproduct', 'App\Http\Controllers\Api\ProductController@destroy');
route::post('postproductcategory', [ProductCategoryController::class, 'create']);
route::get('getproductcategory', [ProductCategoryController::class, 'index']);
route::get('getmember', [MemberController::class, 'index']);
route::post('postmember', [MemberController::class, 'create']);
route::get('getvoucher', [VoucherController::class, 'index']);
route::post('postvoucher', [VoucherController::class, 'create']);
route::get('getcontact', [ContactController::class, 'index']);