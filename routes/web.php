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

Route::get('/show/{id}', [KeuanganController::class, 'show']);
Route::get('/edit/{keuangan}', [KeuanganController::class, 'edit'])->name('edit');
Route::patch('/update/{keuangan}', [KeuanganController::class, 'update'])->name('update');
Route::delete('/delete/{keuangan}', [KeuanganController::class, 'delete'])->name('keuangan.delete');

Route::get('/item', [ItemController::class, 'index'])->name('indexitem');
Route::get('/show/{id}', [ItemController::class, 'showitem']);
Route::patch('/update/{item}', [ItemController::class, 'updateitem'])->name('updateitem');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
		Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

		Route::get('item', ['as' => 'item.index', 'uses' => 'App\Http\Controllers\ItemController@index']);
		Route::get('item/create', ['as' => 'item.create', 'uses' => 'App\Http\Controllers\ItemController@create']);
		Route::post('item/create', ['as' => 'item.store', 'uses' => 'App\Http\Controllers\ItemController@store']);
		Route::get('item/edit/{item}', ['as' => 'item.edit', 'uses' => 'App\Http\Controllers\ItemController@edit']);
		Route::patch('item/update/{item}', ['as' => 'item.update', 'uses' => 'App\Http\Controllers\ItemController@update']);
		Route::delete('item/delete/{item}', ['as' => 'item.delete', 'uses' => 'App\Http\Controllers\ItemController@delete']);

		Route::get('keuangan', ['as' => 'keuangan.index', 'uses' => 'App\Http\Controllers\KeuanganController@index']);
		Route::get('keuangan/create', ['as' => 'keuangan.create', 'uses' => 'App\Http\Controllers\KeuanganController@create']);
		Route::post('keuangan/create', ['as' => 'keuangan.store', 'uses' => 'App\Http\Controllers\keuanganController@store']);
		Route::get('keuangan/edit/{keuangan}', ['as' => 'keuangan.edit', 'uses' => 'App\Http\Controllers\KeuanganController@edit']);
		Route::patch('keuangan/update/{keuangan}', ['as' => 'keuangan.update', 'uses' => 'App\Http\Controllers\KeuanganController@update']);
		Route::delete('keuangan/delete/{keuangan}', ['as' => 'keuangan.delete', 'uses' => 'App\Http\Controllers\KeuanganController@delete']);

		Route::get('laporan', ['as' => 'laporan.index', 'uses' => 'App\Http\Controllers\LaporanController@index']);

		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'App\Http\Controllers\PageController@icons']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'App\Http\Controllers\PageController@notifications']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

