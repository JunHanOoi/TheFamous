<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;

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
    return redirect("login");
});

Route::get("bookTableExample", [BookController::class, 'index']);
Route::get("bookTable", [BookController::class, 'testData']);
Route::get("orderTable", [OrderController::class, 'testData']);

Route::get('showOne', [OrderController::class, 'oneToOne']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Auth::routes();
Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::get('/login/author', [LoginController::class,'showAuthorLoginForm']);
Route::get('/register/admin',
[RegisterController::class,'showAdminRegisterForm']);
Route::get('/register/author',
[RegisterController::class,'showAuthorRegisterForm']);
Route::post('/login/admin', [LoginController::class,'adminLogin']);
Route::post('/login/author', [LoginController::class,'authorLogin']);
Route::post('/register/admin', [RegisterController::class,'createAdmin']);
Route::post('/register/author', [RegisterController::class,'createAuthor']);
Route::group(['middleware' => 'auth:author'], function () {
 Route::view('/author', 'author');
});
Route::group(['middleware' => 'auth:admin'], function () {

 Route::view('/admin', 'admin');
});
Route::get('logout', [LoginController::class,'logout']);
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');