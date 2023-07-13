<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\ItemController;

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

Route::get('/keuangan', [KeuanganController::class, 'index'])->name('keuangan.index');
Route::get('/show/{id}', [KeuanganController::class, 'show']);
Route::get('/keuangan/create', [KeuanganController::class, 'create'])->name('create');
Route::post('/keuangan/create', [KeuanganController::class, 'store'])->name('store');
Route::get('/edit/{keuangan}', [KeuanganController::class, 'edit'])->name('edit');
Route::patch('/update/{keuangan}', [KeuanganController::class, 'update'])->name('update');
Route::delete('/delete/{keuangan}', [KeuanganController::class, 'delete'])->name('keuangan.delete');

Route::get('/item', [ItemController::class, 'index'])->name('indexitem');
Route::get('/show/{id}', [ItemController::class, 'showitem']);
Route::get('/create', [ItemController::class, 'createitem'])->name('createitem');
Route::post('/create', [ItemController::class, 'storeitem'])->name('storeitem');
Route::get('/edit,/{item}', [ItemController::class, 'edititem'])->name('edititem');
Route::patch('/update/{item}', [ItemController::class, 'updateitem'])->name('updateitem');
Route::delete('/delete/{item}', [ItemController::class, 'deleteitem'])->name('item.delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
