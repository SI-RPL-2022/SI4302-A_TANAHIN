<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BBNController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\RiwayatPengajuanSertifikatController;
use App\Http\Controllers\RiwayatController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\JualtanahController;
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

Route::get('/layanan/gantipemilik', [BBNController::class, 'bbnIndex']);
Route::post('/layanan/gantipemilik/store', [BBNController::class, 'store_bbn']);


Route::get('/layanan/buatsertif', [SertifikatController::class, 'create_sertifikat']);
Route::post('/layanan/buatsertif', [SertifikatController::class, 'store_sertifikat']);

/* PROFIL */

/* PROFIL */
// pengajuan
Route::get('/profil/pengajuan/bbn/{id}', [RiwayatController::class, 'pengajuanIndex1'])->name('pengajuan.index.bbn');
Route::post('/profil/pengajuan/bbn/delete', [RiwayatController::class, 'delete1'])->name('pengajuan.delete.bbn');
Route::get('/profil/pengajuan/jualtanah/{id}', [RiwayatController::class, 'pengajuanIndex2'])->name('pengajuan.index.jualtanah');
Route::post('/profil/pengajuan/jualtanah/delete', [RiwayatController::class, 'delete2'])->name('pengajuan.delete.jualtanah');
Route::get('/profil/pengajuan/sertifikat/{id}', [RiwayatController::class, 'pengajuanIndex3'])->name('pengajuan.index.sertifikat');
Route::post('/profil/pengajuan/sertifikat/delete', [RiwayatController::class, 'delete3'])->name('pengajuan.delete.sertifikat');
Route::get('/profil/pengajuan/bbn/detail/{id}', [RiwayatController::class, 'detail1'])->name('pengajuan.detail.bbn');
Route::get('/profil/pengajuan/jualtanah/detail/{id}', [RiwayatController::class, 'detail2'])->name('pengajuan.detail.jualtanah');
Route::get('/profil/pengajuan/sertifikat/detail/{id}', [RiwayatController::class, 'detail3'])->name('pengajuan.detail.sertifikat');
/* transaksi */

/* PRODUK */

/* LAYANAN */
Route::get('/layanan/jualtanah', [JualtanahController::class, 'create_tanah']);
Route::post('/layanan/jualtanah/store', [JualtanahController::class, 'store_tanah']);
Route::get('/admin/layanan/jualtanah/{id}', [JualtanahController::class, 'edit_tanah']);
Route::post('/admin/layanan/jualtanah/{id}', [JualtanahController::class, 'update_tanah']);

/* DASHBOARD TANAH */
