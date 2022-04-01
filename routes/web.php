<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
Route::get('/layanan/buatsertif', function () {
    return view('customer.layanan.buatsertif');
});

/* PROFIL */

/* transaksi */

/* PRODUK */

/* LAYANAN */

/* DASHBOARD TANAH */
