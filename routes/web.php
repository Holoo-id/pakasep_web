<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RumahController;

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
// Route::get('/', 'App\Http\Controllers\RumahController@index')->name('dashboard');
Route::get('/', [RumahController::class, 'index'])->name('dashboard');

// Route::get('/post', 'App\Http\Controllers\RumahController@post');

// Route::post('/admin/tambah', 'App\Http\Controllers\RumahController@store');
// Route::get('/hapus/{id}', 'App\Http\Controllers\RumahController@hapus');
// Route::post('/edit/{id}', 'App\Http\Controllers\RumahController@edit');
// Route::get('/admin/dataRumah', 'App\Http\Controllers\RumahController@dataRumah')->name('select');
// Route::get('/admin/dataRumah/pdfrumah', 'App\Http\Controllers\RumahController@cetak_pdf');
// Route::get('/admin/pengajuan', 'App\Http\Controllers\PengajuanRumahController@index');
// Route::get('/admin/pengajuan/pdfpengajuan', 'App\Http\Controllers\PengajuanRumahController@cetak_pdf');
