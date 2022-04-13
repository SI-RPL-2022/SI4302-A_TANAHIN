<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sertifikat;

class SertifikatController extends Controller
{
    public function create_sertifikat(){
        return view('customer.layanan.buatsertif');
    }

    public function store_sertifikat(Request $request){
        $kode = 120;
        $kode = $kode.rand(11111,99999);

        $sertif = new Sertifikat;
        $sertif->kode_transaksi = $kode;
        $sertif->luas_tanah = $request->luas;
        $sertif->alamat = $request->alamat;
        $sertif->harga = $request->harga;
        $sertif->deskripsi = $request->deskripsi;
        $sertif->kategori = '2';
        $sertif->foto = $request->file('uploadfototanah')->store('layanan/buatsertif');
        $sertif->user_id = auth()->user()->id;
        $sertif->save();

        return redirect('/layanan/buatsertif');
    }
}
