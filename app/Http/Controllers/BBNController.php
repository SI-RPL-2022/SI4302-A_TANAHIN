<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BBN;

class BBNController extends Controller
{
    //BBN
    public function bbnIndex()
    {
        return view('customer.layanan.gantipemilik');
    }

    public function admin()
    {
        return view('admin.layanan.layanan');
    }

    public function store_bbn(Request $request)
    {
        $request->validate([
            'upload_foto_tanah' =>  'required|image|mimes:jpeg,png,jpg,svg',
            'upload_sertifikat' => 'required|image|mimes:jpeg,png,jpg,svg',
        ]);
        $foto_tanah = time() . '.' . $request->upload_foto_tanah->extension();
        $request->upload_foto_tanah->move(public_path('/Template/images/bbntanah'), $foto_tanah);
        $sertifikat = time() . '.' . $request->upload_sertifikat->extension();
        $request->upload_sertifikat->move(public_path('/Template/images/bbntanah'), $sertifikat);

        $BBN = BBN::create([
            'luas_tanah' => $request['luas'],
            'alamat' => $request['alamat'],
            'harga' => $request['harga'],
            'pemilik_lama' => $request['pemilik_lama'],
            'pemilik_baru' => $request['pemilik_baru'],
            'upload_foto_tanah' => $foto_tanah,
            'upload_sertifikat' => $sertifikat,
            'user_id' => auth()->user()->id,
            'status' => 0,
        ]);
        if (isset($BBN)) {
            $info = "Berhasil";
        } else {
            $info = "Gagal";
        }

        return view('customer.layanan.gantipemilik', compact('info'));
    }
}
