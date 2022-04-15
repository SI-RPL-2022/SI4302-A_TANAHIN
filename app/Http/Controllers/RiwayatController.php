<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\BBN;
use App\Models\ProsesLayanan;

class RiwayatController extends Controller
{
    //Pengajuan
    public function pengajuanIndex()
    {
        $bbn = BBN::all();
        return view('customer.profil.pengajuan')->with("bbn", $bbn);
    }

    public function delete(Request $x)
    {
        $bbn = BBN::find($x->id); 
        $bbn->delete();
        return redirect('/profil/pengajuan')->with('success','Pengajuan telah dibatalkan.'); 
    }
}
