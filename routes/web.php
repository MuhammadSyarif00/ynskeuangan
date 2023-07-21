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
// Route::get('/create', [ItemController::class, 'createitem'])->name('createitem');
// Route::post('/create', [ItemController::class, 'storeitem'])->name('storeitem');
// Route::get('/edit,/{item}', [ItemController::class, 'edititem'])->name('edititem');
Route::patch('/update/{item}', [ItemController::class, 'updateitem'])->name('updateitem');
// Route::delete('/delete/{item}', [ItemController::class, 'deleteitem'])->name('item.delete');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
		Route::get('item', ['as' => 'item.index', 'uses' => 'App\Http\Controllers\ItemController@index']);
		Route::get('item/create', ['as' => 'item.create', 'uses' => 'App\Http\Controllers\ItemController@create']);
		Route::post('item/create', ['as' => 'item.store', 'uses' => 'App\Http\Controllers\ItemController@store']);
		Route::get('item/edit/{item}', ['as' => 'item.edit', 'uses' => 'App\Http\Controllers\ItemController@edit']);
		Route::patch('item/update/{item}', ['as' => 'item.update', 'uses' => 'App\Http\Controllers\ItemController@update']);
		Route::delete('item/delete/{item}', ['as' => 'item.delete', 'uses' => 'App\Http\Controllers\ItemController@delete']);
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'App\Http\Controllers\PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'App\Http\Controllers\PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'App\Http\Controllers\PageController@notifications']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'App\Http\Controllers\PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'App\Http\Controllers\PageController@typography']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

