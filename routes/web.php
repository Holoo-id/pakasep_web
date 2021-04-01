<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PengembangController;
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

Route::get('/post', 'App\Http\Controllers\RumahController@post');
Route::get('/login/pengembang', 'App\Http\Controllers\LoginController@index');
Route::get('/auth', 'App\Http\Controllers\LoginController@auth');

Route::post('/admin/tambah', 'App\Http\Controllers\RumahController@store');
Route::post('/edit/{id}', 'App\Http\Controllers\RumahController@edit');
Route::get('/hapus/{id}', 'App\Http\Controllers\RumahController@hapus');
Route::get('/admin/dataRumah', 'App\Http\Controllers\RumahController@dataRumah')->name('select');
Route::get('/admin/dataRumah/pdfrumah', 'App\Http\Controllers\RumahController@cetak_pdf');
Route::get('/admin/pengajuan', 'App\Http\Controllers\PengajuanRumahController@index');
Route::get('/admin/pengajuan/pdfpengajuan', 'App\Http\Controllers\PengajuanRumahController@cetak_pdf');

// New
Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/gallery', [FrontController::class, 'gallery'])->name('user-gallery');

Route::prefix('/admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin-dashboard');
});
Route::prefix('/bank')->group(function () {
    Route::get('/', [BankController::class, 'index'])->name('bank-main');
});
Route::prefix('/pengembang')->group(function () {
    Route::get('/data-perumahan', [PengembangController::class, 'dataPerumahan'])->name('pengembang-perumahan');
    Route::get('/pengajuan-perumahan', [PengembangController::class, 'pengajuanPerumahan'])->name('pengembang-pengajuan');
    Route::get('/profil-pengembang', [PengembangController::class, 'profil'])->name('pengembang-profil');
    Route::get('/status-pengajuan', [PengembangController::class, 'statusPengajuan'])->name('pengembang-status');
    Route::get('/dataKota/{id}', [PengembangController::class, 'kota'])->name('kota');
});