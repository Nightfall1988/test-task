<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ProductMiddleware;
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
    return view('auth/login');
});

Auth::routes();


Auth::routes();

Route::get('/home', [App\Http\Controllers\ProductController::class, 'show'])->middleware('auth');
Route::get('/create-product', [App\Http\Controllers\ProductController::class, 'create'])->middleware('auth')->middleware('isAdmin');
Route::post('/create-product', [App\Http\Controllers\ProductController::class, 'store'])->middleware('auth')->middleware('isAdmin');
