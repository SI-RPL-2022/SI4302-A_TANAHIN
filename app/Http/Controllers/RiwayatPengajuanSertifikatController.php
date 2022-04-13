<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sertifikat;

class RiwayatPengajuanSertifikatController extends Controller
{
    public function index(){
        $pengajuan = Sertifikat::all();
        return view('customer.profil.pengajuan_sertifikat', compact('pengajuan'));
    }
    public function show($id)
    {
        $pengajuan = Sertifikat::where('kode_transaksi','=',$id)->first();
        return view('customer.profil.detailpengajuan_sertifikat', compact('pengajuan'));
    }
}
