<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    //Pengajuan
    public function pengajuanIndex(){
        return view('customer.profil.pengajuan');
    }
}
