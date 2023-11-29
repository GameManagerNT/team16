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
//註解一下
Route::get('/', function () {
    return redirect('brands');
});
Route::get('brands', [brandsController::class, 'index'])->name('brands', 'index');
Route::get('brands/{id}',[BrandsController::class,'show'])->where('id','[0-9]+')->name('brands.show');
Route::get('brands/{id}/edit',[BrandsController::class,'edit'])->where('id','[0-9]+')->name('brands.edit');
Route::get('headphones', [HeadphonesController::class, 'index'])->name('headphones', 'index');
Route::get('headphones/{id}',[HeadphonesController::class,'show'])->where('id','[0-9]+')->name('headphones.show');
Route::get('headphones/{id}/edit',[HeadphonesController::class,'edit'])->where('id','[0-9]+')->name('headphones.edit');