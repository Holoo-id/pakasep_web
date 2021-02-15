<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'App\Http\Controllers\RumahController@index');

Route::get('/post', 'App\Http\Controllers\RumahController@post');

Route::post('/tambah', 'App\Http\Controllers\RumahController@store');

Route::get('/select', 'App\Http\Controllers\RumahController@select')->name('select');