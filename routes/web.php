<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\RiwayatPengajuanSertifikatController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\RiwayatController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
/* PRODUK */
Route::get('/', [ProductController::class, 'index']);

/* TENTANG */
Route::get('/produk', function () {
    return view('customer.produk');
});

/* layanan */

Route::get('/layanan/buatsertif', [SertifikatController::class, 'create_sertifikat']);
Route::post('/layanan/buatsertif', [SertifikatController::class, 'store_sertifikat']);

/* PROFIL */
Route::get('/profil/pengajuan', [RiwayatPengajuanSertifikatController::class, 'index']);
Route::get('/profil/pengajuan/detail/{id}', [RiwayatPengajuanSertifikatController::class, 'show']);

Route::get('/layanan/gantipemilik', [LayananController::class, 'bbnIndex']);

/* PROFIL */
// pengajuan
Route::get('/profil/pengajuan', [RiwayatController::class, 'pengajuanIndex']);


/* transaksi */

/* PRODUK */

/* LAYANAN */

/* DASHBOARD TANAH */
