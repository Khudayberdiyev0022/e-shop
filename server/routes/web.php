<?php

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

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('home');
Route::resource('users', \App\Http\Controllers\User\IndexController::class);
Route::resource('categories', \App\Http\Controllers\Category\IndexController::class);
Route::resource('groups', \App\Http\Controllers\Group\IndexController::class);
Route::resource('tags', \App\Http\Controllers\Tag\IndexController::class);
Route::resource('colors', \App\Http\Controllers\Color\IndexController::class);
Route::resource('products', \App\Http\Controllers\Product\IndexController::class);
