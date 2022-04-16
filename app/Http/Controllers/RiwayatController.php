<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BBN;
use App\Models\Jualtanah;
use App\Models\Sertifikat;


class RiwayatController extends Controller
{
    //Pengajuan
    public function pengajuanIndex1($id)
    {
        $bbns = BBN::all();
        $bbn = $bbns->intersect(BBN::whereIn('user_id', [$id])->get());
        return view('customer.profil.pengajuan')->with("bbn", $bbn);
    }

    public function delete1(Request $x)
    {
        $BBN = BBN::find($x->id);
        $BBN->delete();
        return redirect('/profil/pengajuan/bbn')->with('success', 'Pengajuan telah dibatalkan.');
    }

    public function pengajuanIndex2($id)
    {
        $Jualtanahs = Jualtanah::all();
        $Jualtanah = $Jualtanahs->intersect(Jualtanah::whereIn('user_id', [$id])->get());
        return view('customer.profil.pengajuan2')->with("Jualtanah", $Jualtanah);
    }

    public function delete2(Request $x)
    {
        $Jualtanah = Jualtanah::find($x->id);
        $Jualtanah->delete();
        return redirect('/profil/pengajuan/jualtanah')->with('success', 'Pengajuan telah dibatalkan.');
    }

    public function pengajuanIndex3($id)
    {
        $Sertifikats = Sertifikat::all();
        $Sertifikat = $Sertifikats->intersect(Sertifikat::whereIn('user_id', [$id])->get());
        return view('customer.profil.pengajuan3')->with("Sertifikat", $Sertifikat);
    }

    public function delete3(Request $x)
    {
        $Sertifikat = Sertifikat::find($x->id);
        $Sertifikat->delete();
        return redirect('/profil/pengajuan/sertifikat')->with('success', 'Pengajuan telah dibatalkan.');
    }
}
