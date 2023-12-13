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
Route::get('headphones/{id}', [headphonesController::class, 'show'])->where('id' , '[0-9]+')->name('headphones.show');
Route::get('headphones/{id}/edit', [headphonesController::class, 'edit'])->where('id' , '[0-9]+')->name('headphones.edit');
Route::delete('headphones/delete/{id}', [headphonesController::class, 'destroy'])->where('id', '[0-9]+')->name('headphones.destroy');
Route::get('headphones/create', [headphonesController::class, 'create'])->name('headphones.create');
Route::get('headphones/{id}/edit', [headphonesController::class, 'edit'])->where('id', '[0-9]+')->name('headphones.edit');
Route::patch('headphones/update/{id}', [headphonesController::class, 'update'])->where('id', '[0-9]+')->name('headphones.update');
Route::post('headphones/store', [headphonesController::class, 'store'])->where('id', '[0-9]+')->name('headphones.store');

Route::get('brands', [brandsController::class, 'index'])->name('brands.index');
Route::get('brands/{id}', [brandsController::class, 'show'])->where('id' , '[0-9]+')->name('brands.show');
Route::get('brands/{id}/edit', [brandsController::class, 'edit'])->where('id' , '[0-9]+')->name('brands.edit');
Route::delete('brands/delete/{id}', [brandsController::class, 'destroy'])->where('id', '[0-9]+')->name('brands.destroy');
Route::get('brands/create', [brandsController::class, 'create'])->name('brands.create');
Route::get('brands/{id}/edit', [brandsController::class, 'edit'])->where('id', '[0-9]+')->name('brands.edit');
Route::patch('brands/update/{id}', [brandsController::class, 'update'])->where('id', '[0-9]+')->name('brands.update');
Route::post('brands/store', [brandsController::class, 'store'])->name('brands.store');