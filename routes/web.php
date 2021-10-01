<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get( '/', [HomeController::class, 'index'] )->name( 'home' );
Route::get( '/company/{company}', [HomeController::class, 'companyDetail'] )->name( 'company.detail' );
Route::post( '/cart/add/{company}', [CartController::class, 'addToCart'] )->name( 'cart.add' );
Route::get( '/cart', [CartController::class, 'index'] )->name( 'cart' );
Route::get( '/cart/remove-item/{id}', [CartController::class, 'removeItem'] )->name( 'cart.remove.item' );