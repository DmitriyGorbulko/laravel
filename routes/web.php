<?php

use App\Http\Controllers\ProductsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [ProductsController::class, 'index'])->name('index');
Route::get('/add-phone', [ProductsController::class, 'addForm']);
Route::post('/add-phone', [ProductsController::class, 'add']);
Route::delete('/delete-phone/{id}', [ProductsController::class, 'delete']);
Route::get('/add-to-cart/{id}', [ProductsController::class, 'addToCart']);
Route::get('/cart', [ProductsController::class, 'cart'])->name('cart');
Route::get('/delete-from-cart/{id}', [ProductsController::class, 'deleteFromCart']);