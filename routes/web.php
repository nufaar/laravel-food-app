<?php

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

Route::view('/foods', 'food');
Route::get('/foods/create', [FoodController::class, 'create'])->name('foods.create');
Route::get('/foods/edit/{id}', [FoodController::class, 'edit'])->name('foods.edit');
