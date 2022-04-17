<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sertifikat;

class SertifikatController extends Controller
{
    public function create_sertifikat()
    {
        return view('customer.layanan.buatsertif');
    }

    public function store_sertifikat(Request $request)
    {
        $request->validate([
            'uploadfototanah' => 'required|image|mimes:jpeg,png,jpg,svg',
        ]);
        $uploadfototanahName = time() . '.' . $request->uploadfototanah->extension();
        $request->uploadfototanah->move(public_path('/Template/images/sertifikat'), $uploadfototanahName);

        $sertifikat = Sertifikat::create([
            'luas_tanah' => $request['luas'],
            'alamat' => $request['alamat'],
            'harga' => $request['harga'],
            'deskripsi' => $request['deskripsi'],
            'foto' => $uploadfototanahName,
            'user_id' => auth()->user()->id,
            'status' => 0,
        ]);
        if (isset($sertifikat)) {
            $info = "Berhasil";
        } else {
            $info = "Gagal";
        }

        return view('customer.layanan.buatsertif', compact('info'));
    }
}
