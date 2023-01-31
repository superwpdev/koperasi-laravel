<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Api\NewsController;
// use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\MemberController;
// use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\ProductCategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\VoucherController;

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

Route::get('getproduct',[ProductController::class, 'index']);
Route::post('postproduct',[ProductController::class, 'create']);
Route::post('updateproduct',[ProductController::class, 'update']);
Route::post('deleteproduct/{id}',[ProductController::class, 'destroy']);

Route::get('getmember',[MemberController::class, 'index']);
Route::post('postmember',[MemberController::class, 'create']);
Route::post('updatemember',[MemberController::class, 'update']);
Route::post('deletemember/{id}',[MemberController::class, 'destroy']);

Route::get('getvoucher',[VoucherController::class, 'index']);
Route::post('postvoucher',[VoucherController::class, 'create']);
Route::post('updatevoucher',[VoucherController::class, 'update']);
Route::post('deletevoucher/{id}',[VoucherController::class, 'destroy']);

Route::get('getcategory',[ProductCategoryController::class, 'index']);
Route::post('postcategory',[ProductCategoryController::class, 'create']);
Route::post('updatecategory',[ProductCategoryController::class, 'update']);
Route::post('deletecategory/{id}',[ProductCategoryController::class, 'destroy']);

// Route::get('getnews',[NewsController::class, 'index']);
// Route::post('postnews',[NewsController::class, 'create']);
// Route::post('deletenews/{id}',[NewsController::class, 'destroy']);
// Route::post('updatenews',[NewsController::class, 'update']);
