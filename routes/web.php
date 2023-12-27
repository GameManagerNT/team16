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
//註解一下
Route::get('/', function () {
    return redirect('brands');
});
// 顯示顯示所有球隊資料
Route::get('brands', [brandsController::class, 'index'])->name('brands.index');
// 顯示單一球員資料
Route::get('brands/{id}',[BrandsController::class,'show'])->where('id','[0-9]+')->name('brands.show');
// 修改單一球員表單
Route::get('brands/{id}/edit',[BrandsController::class,'edit'])->where('id','[0-9]+')->name('brands.edit');
// 刪除單一球隊及旗下球員資料
Route::delete('brands/delete/{id}', [BrandsController::class, 'destroy'])->where('id', '[0-9]+')->name('brands.destroy');
// 新增球隊表單
Route::get('brands/create', [BrandsController::class, 'create'])->name('brands.create');
// 修改球隊表單
Route::get('brands/{id}/edit', [BrandsController::class, 'edit'])->where('id', '[0-9]+')->name('brands.edit');
// 修改球隊資料
Route::patch('brands/update/{id}', [BrandsController::class, 'update'])->where('id', '[0-9]+')->name('brands.update');
// 儲存新球隊資料
Route::post('brands/store', [BrandsController::class, 'store'])->name('brands.store');

Route::get('brands/classic', [BrandsController::class, 'classic'])->name('brands.classic');




// 顯示顯示所有球隊資料
Route::get('headphones', [HeadphonesController::class, 'index'])->name('headphones.index');
// 顯示單一球隊資料
Route::get('headphones/{id}',[HeadphonesController::class,'show'])->where('id','[0-9]+')->name('headphones.show');
// 修改單一球隊表單
Route::get('headphones/{id}/edit',[HeadphonesController::class,'edit'])->where('id','[0-9]+')->name('headphones.edit');
//刪除單一球員資料
Route::delete('headphones/delete/{id}', [HeadphonesController::class, 'destroy'])->where('id', '[0-9]+')->name('headphones.destroy');
// 新增球員表單
Route::get('headphones/create', [HeadphonesController::class, 'create'])->name('headphones.create');
// 修改球員表單
Route::get('headphones/{id}/edit', [HeadphonesController::class, 'edit'])->where('id', '[0-9]+')->name('headphones.edit');
// 修改球員資料
Route::patch('headphones/update/{id}', [HeadphonesController::class, 'update'])->where('id', '[0-9]+')->name('headphones.update');
// 儲存新球員資料
Route::post('headphones/store', [HeadphonesController::class, 'store'])->where('id', '[0-9]+')->name('headphones.store');
//便宜耳機
Route::get('headphones/cheappirce', [HeadphonesController::class, 'cheappirce'])->name('headphones.cheappirce');
//奢華耳機
Route::get('headphones/eppirce', [HeadphonesController::class, 'eppirce'])->name('headphones.eppirce');
//選定位置查詢耳機
Route::get('headphones/genre', [HeadphonesController::class, 'genre'])->name('headphones.genre');


