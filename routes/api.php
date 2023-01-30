<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Api\NewsController;
// use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\MemberController;
use App\Http\Controllers\Api\CartController;
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

// Route::get('getnews',[NewsController::class, 'index']);
// Route::post('postnews',[NewsController::class, 'create']);
// Route::get('getcategory',[CategoryController::class, 'index']);
// Route::post('postcategory',[CategoryController::class, 'create']);
// Route::post('editcategory',[CategoryController::class, 'update']);
// Route::post('deletecategory',[CategoryController::class, 'destroy']);

Route::get('getmember',[MemberController::class, 'index']);
Route::post('postmember',[MemberController::class, 'create']);
Route::post('deletemember',[MemberController::class, 'destroy']);

Route::get('getprodcategory',[ProductCategoryController::class, 'index']);
Route::post('postprodcategory',[ProductCategoryController::class, 'create']);

Route::get('getproduct',[ProductController::class, 'index']);
Route::post('postproduct',[ProductController::class, 'create']);
Route::post('updateproduct',[ProductController::class, 'update']);
Route::post('deleteproduct/{id}',[ProductController::class, 'destroy']);

Route::get('getvoucher',[VoucherController::class, 'index']);
Route::post('postvoucher',[VoucherController::class, 'create']);

Route::get('getnews',[NewsController::class, 'index']);
Route::post('postnews',[NewsController::class, 'create']);
Route::post('deletenews/{id}',[NewsController::class, 'destroy']);
Route::post('updatenews',[NewsController::class, 'update']);
