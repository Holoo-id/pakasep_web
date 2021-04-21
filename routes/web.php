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
Route::get('/register/pengembang', 'App\Http\Controllers\LoginController@register');
Route::get('/auth', 'App\Http\Controllers\LoginController@auth');

Route::post('/admin/tambah', 'App\Http\Controllers\RumahController@store');
Route::post('/edit/{id}', 'App\Http\Controllers\RumahController@edit');
Route::get('/hapus/{id}', 'App\Http\Controllers\RumahController@hapus');
Route::get('/admin/dataRumah', 'App\Http\Controllers\RumahController@dataRumah')->name('select');
Route::get('/admin/dataRumah/pdfrumah', 'App\Http\Controllers\RumahController@cetak_pdf');
Route::get('/admin/pengajuan', 'App\Http\Controllers\PengajuanRumahController@index');
Route::get('/admin/pengajuan/pdfpengajuan', 'App\Http\Controllers\PengajuanRumahController@cetak_pdf');

// New -- For Page Only -- Ganti mah ganti we..
Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/gallery', [FrontController::class, 'gallery'])->name('user-gallery');
Route::get('/perumahan', [FrontController::class, 'perumahan'])->name('user-perumahan');

Route::prefix('/admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin-dashboard');
});
Route::prefix('/bank')->group(function () {
    Route::get('/', [BankController::class, 'index'])->name('bank-main');
});
Route::prefix('/pengembang')->group(function () {
    Route::get('/edit-perumahan', [PengembangController::class, 'editPerumahan'])->name('pengembang-edit');
    Route::get('/data-perumahan', [PengembangController::class, 'dataPerumahan'])->name('pengembang-perumahan');
    Route::prefix('/pengajuan-perumahan')->group(function (){
        // Route::get('/pengajuan-perumahan', [PengembangController::class, 'pengajuanPerumahan'])->name('pengembang-pengajuan');
        Route::get('/step-1', [PengembangController::class, 'pengajuanDataRumah'])->name('step-1');
        Route::post('/data-rumah', [PengembangController::class, 'postDataRumah'])->name('post-1');
        Route::get('/step-2', [PengembangController::class, 'pengajuanDokumen'])->name('step-2');
        Route::post('/dokumen', [PengembangController::class, 'postDokumen'])->name('post-2');
        Route::post('/post-step3', [PengembangController::class, 'uploadImage'])->name('post-3');
        Route::get('/step-3', [PengembangController::class, 'pengajuanVerifikasi'])->name('step-3');
        Route::post('/verifikasi', [PengembangController::class, 'postVerifikasi'])->name('post-4');
    });
    Route::get('/profil-pengembang', [PengembangController::class, 'profil'])->name('pengembang-profil');
    Route::get('/date', [PengembangController::class, 'date'])->name('date');
    Route::get('/status-pengajuan', [PengembangController::class, 'statusPengajuan'])->name('pengembang-status');
    Route::get('/dataKota/{id}', [PengembangController::class, 'kota'])->name('kota');
    Route::get('/dataKecamatan/{id}', [PengembangController::class, 'kecamatan'])->name('kecamatan');
    Route::get('/dataKelurahan/{id}', [PengembangController::class, 'kelurahan'])->name('kelurahan');
    // Route::post('/pengajuan-perumahan', [PengembangController::class, 'uploadImage'])->name('images');
    // Route::post('/tambahRumah', [PengembangController::class, 'store'])->name('rumah');
    
});