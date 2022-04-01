<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    //BBN
    public function bbnIndex(){
        return view('customer.layanan.gantipemilik');
    }
}
