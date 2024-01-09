<?php

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

//List of manufacturers
Route::get('/manufacturers', function () {
    return view('welcome');
})-> name('manufacturers.list');

//List of cars
Route::get('/cars', function () {
    return view('welcome');
})-> name('cars.list');

//Create new car
Route::get('/cars/create', function () {
    return view('welcome');
})->name('cars.create');

//Car details
Route::get('/cars/{id}', function ($id) {
    return App\Models\Car::find($id);
})->name('cars.show');

//Edit Car
Route::get('/cars/{id}/edit', function ($id) {
    return view('welcome');
})->name('cars.edit');

