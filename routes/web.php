<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/', DashbordController::class);

Route::get('/products', [ProductController::class, 'index']);

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/products/new', [ProductController::class, 'create']);

Route::get('/categories/new', [CategoryController::class, 'create']);

Route::post('/categories/store', [CategoryController::class, 'store']);

Route::post('/products/store', [productController::class, 'store']);

Route::delete('/products/delete/{product}', [productController::class, 'destroy'])->name('products.delete');

Route::delete('/categories/delete/{category}', [CategoryController::class, 'destroy'])->name('categories.delete');

Route::get('/login', [UserController::class, 'login']);

Route::post('/authenticate', [UserController::class, 'authenticate']);

Route::get('/register', [UserController::class, 'register']);

Route::post('/user/store', [UserController::class, 'store']);


