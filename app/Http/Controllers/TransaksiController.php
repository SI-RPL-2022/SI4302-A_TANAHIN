<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Product;

class TransaksiController extends Controller
{
    public function store(Request $request)
    {
        $harga = (int)$request->luas * (int)$request->harga;
        $Transaksi = Transaksi::create([
            'product_id' => $request['product_id'],
            'luas' => $request['luas'],
            'harga' => $harga,
            'id_penjual' => $request['id_penjual'],
            'id_pembeli' => auth()->user()->id,
            'status' => 0,
            'foto' => $request['foto'],
            'alamat' => $request['alamat']
        ]);
        if (isset($Transaksi)) {
            $info = "Berhasil";
        } else {
            $info = "Gagal";
        }
        return redirect()->route('home', ['info' => $info]);
    }

    public function history()
    {
        $id = auth()->user()->id;
        $transaksi = Transaksi::where('id_pembeli', '=', $id)->get();
        return view('customer.profil.riwayat', compact('transaksi'));
    }
}
