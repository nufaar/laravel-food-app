<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FoodController;
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

Route::get('/', function () {
    return view('index');
});

Route::prefix('foods')->group(function () {
    Route::view('/', 'foods.index');
    Route::get('/create', [FoodController::class, 'create'])->name('foods.create');
    Route::get('/edit/{id}', [FoodController::class, 'edit'])->name('foods.edit');
});

Route::prefix('categories')->group(function () {
    Route::view('/', 'categories.index');
    Route::get('/create', [CategoryController::class, 'create']);
    Route::get('/edit/{id}', [CategoryController::class, 'edit']);
});
