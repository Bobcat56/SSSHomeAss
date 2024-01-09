<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ManufacturerController;
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

//List of manufacturers
Route::get('/manufacturers', [ManufacturerController::class, 'index'])->name('manufacturers.index');

//List of cars
Route::get('/cars', [CarController::class, 'index'])->name('cars.index');

//Create new car
Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');

//Car details
Route::get('/cars/{id}', [CarController::class, 'show'])->name('cars.show');

//Edit Car
Route::get('/cars/{id}/edit', [CarController::class, 'edit'])->name('cars.edit');


