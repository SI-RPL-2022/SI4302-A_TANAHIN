<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\BBN;
use App\Models\ProsesLayanan;

class BBNController extends Controller
{
    //BBN
    public function bbnIndex()
    {
        return view('customer.layanan.gantipemilik');
    }

    public function admin()
    {
        $layanan = Layanan::all();
        $jual_tanah = Layanan::where('kategori','=','Pengajuan Penjualan Tanah')->count();
        $sertifikat = Layanan::where('kategori','=','Pembuatan Sertifikat')->count();
        $bbn_tanah = Layanan::where('kategori','=','Pengajuan BBN Tanah')->count();
        return view('admin.layanan.layanan', compact('layanan','jual_tanah','sertifikat','bbn_tanah'));

    }

    public function store_bbn(Request $request)
    {
        $kode = 120;
        $kode = $kode.rand(11111,99999);

        $bbn = new BBN;
        $bbn->kode_transaksi = $kode;
        $bbn->luas_tanah = $request->luas;
        $bbn->alamat = $request->alamat;
        $bbn->harga = $request->harga;
        $bbn->pemilik_lama = $request->pemilik_lama;
        $bbn->pemilik_baru = $request->pemilik_baru;
        $bbn->kategori = 'Pengajuan BBN Tanah';
        $bbn->upload_sertifikat = $request->file('upload_sertifikat')->store('layanan/jualtanah/sertifikat');
        $bbn->upload_foto_tanah = $request->file('upload_foto_tanah')->store('layanan/buatsertif');
        $bbn->user_id = auth()->user()->id;
        $bbn->save();

        $proses = new ProsesLayanan;
        $proses->kode_transaksi = $kode;
        $proses->proses = "Pemilik Tanah Memasukkan Data Tanah";
        $proses->save();

        return redirect('/profil/pengajuan');
    }

    
}


