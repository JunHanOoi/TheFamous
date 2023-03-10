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

Route::view('login','login');
Route::post('login',[UserController::class,'login']);

Route::get("bookTableExample", [BookController::class, 'index']);
Route::get("bookTable", [BookController::class, 'testData']);
Route::get("orderTable", [OrderController::class, 'testData']);

Route::get('showOne', [OrderController::class, 'oneToOne']);

