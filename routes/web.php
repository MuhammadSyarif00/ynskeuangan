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

Route::get('/keuangan', [KeuanganController::class, 'index'])->name('index');
Route::get('/show/{id}', [KeuanganController::class, 'show']);
Route::get('/create', [KeuanganController::class, 'create'])->name('create');
Route::post('/create', [KeuanganController::class, 'store'])->name('store');
Route::get('/edit/{keuangan}', [KeuanganController::class, 'edit'])->name('edit');
Route::patch('/update/{keuangan}', [KeuanganController::class, 'update'])->name('update');
//Route::delete('/delete/{keuangan}', [KeuanganController::class, 'delete'])->name('delete');

Route::get('/item', [ItemController::class, 'indexitem'])->name('indexitem');
Route::get('/show/{id}', [ItemController::class, 'showitem']);
Route::get('/create', [ItemController::class, 'createitem'])->name('createitem');
Route::post('/create', [ItemController::class, 'storeitem'])->name('storeitem');
Route::get('/edit,/{keuangan}', [ItemController::class, 'edititem'])->name('edititem');
Route::patch('/update/{keuangan}', [ItemController::class, 'updateitem'])->name('updateitem');
Route::delete('/delete/{keuangan}', [ItemController::class, 'deleteitem'])->name('deleteitem');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
