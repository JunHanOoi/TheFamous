<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\OrderController;

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
    return view('welcome');
});

Route::get("bookTableExample", [BookController::class, 'index']);
Route::get("bookTable", [BookController::class, 'testData']);
Route::get("orderTable", [OrderController::class, 'testData']);

Route::get('showOne', [OrderController::class, 'oneToOne']);