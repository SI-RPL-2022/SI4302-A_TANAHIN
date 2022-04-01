<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\RiwayatController;
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
Route::get('/layanan/gantipemilik', [LayananController::class, 'bbnIndex']);

/* PROFIL */
// pengajuan
Route::get('/profil/pengajuan', [RiwayatController::class, 'pengajuanIndex']);

/* transaksi */

/* PRODUK */

/* LAYANAN */

/* DASHBOARD TANAH */
