<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\brandsController;
use App\Http\Controllers\headphonesController;
use Illuminate\Support\Facades\Auth;
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
Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return redirect('headphones');
    });

    Route::get('headphones', [headphonesController::class, 'index'])->name('headphones.index');
    Route::get('headphones/rich', [headphonesController::class, 'rich'])->name('headphones.rich');
    Route::get('headphones/cheap', [headphonesController::class, 'cheap'])->name('headphones.cheap');
    Route::get('headphones/genre', [headphonesController::class, 'genre'])->name('headphones.genre');
    Route::get('headphones/{id}', [headphonesController::class, 'show'])->where('id' , '[0-9]+')->name('headphones.show');
    Route::get('headphones/{id}/edit', [headphonesController::class, 'edit'])->where('id' , '[0-9]+')->name('headphones.edit');
    Route::delete('headphones/delete/{id}', [headphonesController::class, 'destroy'])->where('id', '[0-9]+')->name('headphones.destroy')->middleware('can:admin');
    Route::get('headphones/create', [headphonesController::class, 'create'])->name('headphones.create')->middleware('can:admin');
    Route::get('headphones/{id}/edit', [headphonesController::class, 'edit'])->where('id', '[0-9]+')->name('headphones.edit');
    Route::patch('headphones/update/{id}', [headphonesController::class, 'update'])->where('id', '[0-9]+')->name('headphones.update');
    Route::post('headphones/store', [headphonesController::class, 'store'])->where('id', '[0-9]+')->name('headphones.store')->middleware('can:admin');

    Route::get('brands', [brandsController::class, 'index'])->name('brands.index');
    Route::get('brands/classic', [brandsController::class, 'classic'])->name('brands.classic');
    Route::get('brands/{id}', [brandsController::class, 'show'])->where('id' , '[0-9]+')->name('brands.show');
    Route::get('brands/{id}/edit', [brandsController::class, 'edit'])->where('id' , '[0-9]+')->name('brands.edit');
    Route::delete('brands/delete/{id}', [brandsController::class, 'destroy'])->where('id', '[0-9]+')->name('brands.destroy')->middleware('can:admin');
    Route::get('brands/create', [brandsController::class, 'create'])->name('brands.create')->middleware('can:admin');
    Route::get('brands/{id}/edit', [brandsController::class, 'edit'])->where('id', '[0-9]+')->name('brands.edit');
    Route::patch('brands/update/{id}', [brandsController::class, 'update'])->where('id', '[0-9]+')->name('brands.update');
    Route::post('brands/store', [brandsController::class, 'store'])->name('brands.store')->middleware('can:admin');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');