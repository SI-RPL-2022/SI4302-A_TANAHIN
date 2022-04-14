<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Layanan;

class LayananController extends Controller
{
    public function create_tanah()
    {
        return view('customer.layanan.jualtanah');
        
    }
    public function store_tanah(Request $request)
    {

        $kode = 120;
        $kode = $kode.rand(11111,99999);

        $jual = new Layanan;
        $jual->kode_transaksi = $kode;
        $jual->luas_tanah = $request->luas;
        $jual->alamat = $request->alamat;
        $jual->harga = $request->harga;
        $jual->deskripsi = $request->deskripsi;
        $jual->kategori = 'Pengajuan Penjualan Tanah';
        $jual->sertifikat = $request->file('uploadsertifikat')->store('layanan/jualtanah/sertifikat');
        $jual->foto = $request->file('uploadfototanah')->store('layanan/jualtanah/foto');
        $jual->user_id = auth()->user()->id;
        $jual->save();

        return redirect('/layanan/jualtanah');

    }
}
