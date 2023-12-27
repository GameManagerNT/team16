<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\HeadphonesController;
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
    return redirect('brands');
});

// 顯示所有廠牌資料
Route::get('brands', [BrandsController::class, 'index'])->name('brands.index');
//顯示經典廠牌
Route::get('brands/classic', [BrandsController::class, 'classic'])->name('brands.classic');
// 顯示單一廠牌資料
Route::get('brands/{id}', [BrandsController::class, 'show'])->where('id', '[0-9]+')->name('brands.show');
// 修改單一廠牌表單
Route::get('brands/{id}/edit', [BrandsController::class, 'edit'])->where('id', '[0-9]+')->name('brands.edit');
// 刪除單一廠商及旗下耳機資料
Route::delete('brands/delete/{id}', [BrandsController::class, 'destroy'])->where('id', '[0-9]+')->name('brands.destroy');
// 新增廠商表單
Route::get('brands/create', [BrandsController::class, 'create'])->name('brands.create');
// 修改廠商表單
Route::get('brands/{id}/edit', [BrandsController::class, 'edit'])->where('id', '[0-9]+')->name('brands.edit');
// 修改球隊資料
Route::patch('brands/update/{id}', [BrandsController::class, 'update'])->where('id', '[0-9]+')->name('brands.update');
// 儲存新球隊資料
Route::post('brands/store', [BrandsController::class, 'store'])->name('brands.store');


// 顯示所有耳機資料
Route::get('headphones', [HeadphonesController::class, 'index'])->name('headphones.index');
//查詢耳機類型
Route::get('headphones/genre', [HeadphonesController::class, 'genre'])->name('headphones.genre');
// 顯示便宜耳機資料
Route::get('headphones/cheappirce', [HeadphonesController::class, 'cheappirce'])->name('headphones.cheappirce');
// 顯示奢華耳機資料
Route::get('headphones/richpirce', [HeadphonesController::class, 'richpirce'])->name('headphones.richpirce');
// 顯示單一耳機資料
Route::get('headphones/{id}', [HeadphonesController::class, 'show'])->where('id', '[0-9]+')->name('headphones.show');
// 修改單一耳機表單
Route::get('headphones/{id}/edit', [HeadphonesController::class, 'edit'])->where('id', '[0-9]+')->name('headphones.edit');
// 刪除單一耳機資料
Route::delete('headphones/delete/{id}', [HeadphonesController::class, 'destroy'])->where('id', '[0-9]+')->name('headphones.destroy');
// 新增耳機表單
Route::get('headphones/create', [HeadphonesController::class, 'create'])->name('headphones.create');
// 修改耳機表單
Route::get('headphones/{id}/edit', [HeadphonesController::class, 'edit'])->where('id', '[0-9]+')->name('headphones.edit');
// 修改耳機資料
Route::patch('headphones/update/{id}', [HeadphonesController::class, 'update'])->where('id', '[0-9]+')->name('headphones.update');
// 儲存新耳機資料
Route::post('headphones/store', [HeadphonesController::class, 'store'])->where('id', '[0-9]+')->name('headphones.store');