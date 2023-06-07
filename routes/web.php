<?php

use App\Http\Controllers\CategoryController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('category', CategoryController::class);
Route::get('/trashed_category', [CategoryController::class, 'trashed_category'])->name('category.trashed');
Route::get('/restore_category/{id}', [CategoryController::class, 'restore_category'])->name('category.restore');
Route::delete('/forceDelete/{id}', [CategoryController::class, 'forceDelete'])->name('category.forceDelete');
