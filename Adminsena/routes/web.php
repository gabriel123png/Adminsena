<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ComputersController;



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

Route::get('/', function () {
    return view('welcome');
});


Route::get('category/create',[CategoryController::class,'create']);
Route::post('category/store',[CategoryController::class,'store'])->name('category.store');

Route::get('computer/computador',[ComputersController::class,'computador']);
Route::get('computer/completado',[ComputersController::class,'completado'])->name('computer.completado');
Route::post('product/store',[ProductController::class,'store'])->name('product.store');
Route::get('product/{id}',[ProductController::class,'show'])->name('product.show');