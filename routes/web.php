<?php

use App\Http\Controllers\AuthApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;


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

require __DIR__.'/auth.php';

Route::get('all-products/{page?}', [ProductsController::class, 'index'])->where('page', '^[0-9]*$');

Route::get('products/{id}', [ProductsController::class, 'show'])->name('productView')->where('id', '^[0-9]*$');

Route::post('login-api', [AuthApiController::class, 'login'])->name('loginApi');

Route::get('logout-api', [AuthApiController::class, 'logout'])->name('logoutApi');
