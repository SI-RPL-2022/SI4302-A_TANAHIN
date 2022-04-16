<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Jualtanah;

class JualtanahController extends Controller
{
    public function create_tanah()
    {
        return view('customer.layanan.jualtanah');
    }
    public function store_tanah(Request $request)
    {
        $request->validate([
            'uploadfototanah' =>  'required|image|mimes:jpeg,png,jpg,svg',
        ]);
        $uploadfototanahName = time() . '.' . $request->uploadfototanah->extension();
        $request->uploadfototanah->move(public_path('/Template/images/jualtanah'), $uploadfototanahName);

        $request->validate([
            'uploadsertifikat' => 'required|image|mimes:jpeg,png,jpg,svg',
        ]);
        $uploadsertifikatName = time() . '.' . $request->uploadsertifikat->extension();
        $request->uploadsertifikat->move(public_path('/Template/images/jualtanah'), $uploadsertifikatName);

        $jualtanah = Jualtanah::create([
            'luas_tanah' => $request['luas'],
            'alamat' => $request['alamat'],
            'harga' => $request['harga'],
            'deskripsi' => $request['deskripsi'],
            'sertifikat' => $uploadsertifikatName,
            'foto' => $uploadfototanahName,
            'user_id' => auth()->user()->id,
            'status' => 0,
        ]);
        return redirect('/layanan/jualtanah');
    }
}
