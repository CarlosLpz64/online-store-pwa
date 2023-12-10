<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::get('/', function () {
    return view('home');
}); */

Route::get('/', [ProductController::class, 'getViewindex']);
Route::get('/detalle/{id}', [ProductController::class, 'getViewShow']);
Route::get('/producto-agregado', [ProductController::class, 'getViewSuccess']);
Route::get('/carrito', [ProductController::class, 'getViewBasket']);
Route::post('/carrito', [ProductController::class, 'getViewBasketPost']);
Route::get('/compra-exitosa', function () {
    return view('purchased');
});

