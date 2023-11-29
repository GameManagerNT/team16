<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\brandsController;
use App\Http\Controllers\headphonesController;
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
    return redirect('headphones');
});

Route::get('headphones', [headphonesController::class, 'index'])->name('headphones.index');
Route::get('headphones/{id}', [headphonesController::class, 'show'])->where('id', '[0-9]+')->name('headphones.show');
Route::get('headphones/{id}/edit', [headphonesController::class, 'edit'])->where('id', '[0-9]+')->name('headphones.edit');

Route::get('brands', [brandsController::class, 'index'])->name('brands .index');
Route::get('brands/{id}', [brandsController::class, 'show'])->where('id', '[0-9]+')->name('brands.show');
Route::get('brands/{id}/edit', [brandsController::class, 'edit'])->where('id', '[0-9]+')->name('brands.edit');
