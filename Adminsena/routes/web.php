<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ComputersController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ApprenticesController;




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
Route::post('category/store',[CategoryController::class,'create'])->name('category.store');

Route::get('computers/computador',[ComputersController::class,'computador']);
Route::post('computers/computador',[ComputersController::class,'computador'])->name('computer.computador');

Route::get('/Area/create', [AreaController::class, 'create'])->name('Area.create');
Route::post('/Area/store', [AreaController::class, 'store'])->name('Area.store');
Route::get('/Apprentices/Admin', [ApprenticesController::class, 'admin'])->name('apprentices.admin');
Route::post('/Apprentices/registro', [ApprenticesController::class, 'registro'])->name('apprentices.registro');
