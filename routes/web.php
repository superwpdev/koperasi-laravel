<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductCategoryController;
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

// Route::get('/', function () {
//     return view('/login');
// });
Route::get('/', [LoginController::class, 'index']);


// Route::get('/news', function () {
//     return view('news');
// });

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/addnews', [NewsController::class, 'create'])->name('addnews');
Route::post('/insertnews', [NewsController::class, 'store'])->name('insertnews');
Route::get('/tampilnews/{id}', [NewsController::class, 'edit'])->name('tampilnews');
Route::post('/updatenews/{id}', [NewsController::class, 'update'])->name('updatenews');
Route::get('/deletenews/{id}', [NewsController::class, 'destroy'])->name('deletenews');



Route::get('/productcategory', [ProductCategoryController::class, 'index'])->name('productcategory');
Route::get('/addproductcategory', [ProductCategoryController::class, 'create'])->name('addproductcategory');
Route::post('/insertproductcategory', [ProductCategoryController::class, 'store'])->name('insertproductcategory');
Route::get('/tampilproductcategory/{id}', [ProductCategoryController::class, 'edit'])->name('tampilproductcategory');
Route::post('/updateproductcategory/{id}', [ProductCategoryController::class, 'update'])->name('updateproductcategory');
Route::get('/deleteproductcategory/{id}', [ProductCategoryController::class, 'destroy'])->name('deleteproductcategory');




Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/users', [UsersController::class, 'index'])->name('users');
Route::get('/deleteusers/{id}', [UsersController::class, 'destroy'])->name('deleteusers');




Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/addproduct', [ProductController::class, 'create'])->name('addproduct');
Route::post('/insertproduct', [ProductController::class, 'store'])->name('insertproduct');
Route::get('/editproduct/{id}', [ProductController::class, 'edit'])->name('editproduct');
Route::post('/updateproduct', [ProductController::class, 'update'])->name('updateproduct');
Route::get('/deleteproduct/{id}', [ProductController::class, 'destroy']);




Route::get('/member', [MemberController::class, 'index'])->name('member.list');
Route::get('/member-add', [MemberController::class, 'create'])->name('member.add');
Route::get('/member-create', [MemberController::class, 'store'])->name('member.create');
Route::get('/member-edit', [MemberController::class, 'edit'])->name('member.edit');
Route::get('/member-update', [MemberController::class, 'update'])->name('member.update');
Route::get('/member-delete', [MemberController::class, 'delete'])->name('member.delete');


