<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\RiwayatPengajuanSertifikatController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
/* PRODUK */
Route::get('/', function () {
    return view('home');
});

/* TENTANG */
Route::get('/produk', function () {
    return view('customer.produk');
});

/* layanan */
Route::get('/layanan/buatsertif', [SertifikatController::class, 'create_sertifikat']);
Route::post('/layanan/buatsertif', [SertifikatController::class, 'store_sertifikat']);

/* PROFIL */
Route::get('/profil/pengajuan', [RiwayatPengajuanSertifikatController::class, 'index']);
Route::get('/profil/pengajuan/detail/{id}', [RiwayatPengajuanSertifikatController::class,'show']);

/* transaksi */

/* PRODUK */

/* LAYANAN */

/* DASHBOARD TANAH */
