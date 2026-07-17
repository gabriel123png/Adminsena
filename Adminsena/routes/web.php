<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainingCentersController;
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



Route::get('/areas/create', [AreaController::class,'create'])->name('areas.create');

Route::post('/areas/store', [AreaController::class,'store'])->name('areas.store');

Route::get('/TrainingCenters/create',[TrainingCentersController::class,'create'])->name('TrainingCenters.create');

Route::post('/TrainingCenters/store',[TrainingCentersController::class,'store'])->name('TrainingCenters/store');

Route::get('/computers/create', [ComputersController::class, 'create'])->name('computers.create');
Route::post('/computers/store', [ComputersController::class, 'store'])->name('computers.store');

Route::get('/Apprentice/create', [ApprenticeController::class, 'create'])->name('apprentice.create');
Route::post('/Apprentice/store', [ApprenticeController::class, 'store'])->name('apprentice.store');