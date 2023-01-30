<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\UsersController;
use App\Http\Controllers\Api\AuthController;
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

Route::get('getnews',[NewsController::class, 'index']);
Route::post('postnews',[NewsController::class, 'create']);
Route::post('deletenews/{id}',[NewsController::class, 'destroy']);
Route::post('updatenews',[NewsController::class, 'update']);


Route::get('getcategory',[CategoryController::class, 'index']);
Route::post('postcategory',[CategoryController::class, 'create']);
Route::post('updatecategory',[CategoryController::class, 'update']);
Route::post('deletecategory/{id}',[CategoryController::class, 'destroy']);

Route::get('getuser',[UsersController::class, 'index']);
Route::post('postuser',[UsersController::class, 'create']);
Route::post('deleteuser/{id}',[UsersController::class, 'destroy']);

Route::post('register',[AuthController::class, 'register']);
