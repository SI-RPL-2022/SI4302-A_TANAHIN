<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Jualtanah;
use App\Models\Proses_riwayat;

class JualtanahController extends Controller
{
    public function create_tanah()
    {
        return view('customer.layanan.jualtanah');
    }

    public function store_tanah(Request $request)
    {
        $kode = rand(11111,99999);

        $request->validate([
            'uploadfototanah' =>  'required|image|mimes:jpeg,png,jpg,svg',
            'uploadsertifikat' => 'required|image|mimes:jpeg,png,jpg,svg',
        ]);
        $uploadfototanahName = time() . '.' . $request->uploadfototanah->extension();
        $request->uploadfototanah->move(public_path('/Template/images/jualtanah'), $uploadfototanahName);
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
            'kode_transaksi' => $kode,
        ]);

        $riwayat = Proses_riwayat::create([
            'kode_transaksi' => $kode,
            'proses' => "Penjual Input Tanah",
        ]);

        if (isset($jualtanah)) {
            $info = "Berhasil";
        } else {
            $info = "Gagal";
        }

        return view('customer.layanan.jualtanah', compact('info'));
    }

    public function edit_tanah($id)
    {
        $layanan = Jualtanah::where('kode_transaksi','=',$id)->first();
        $riwayat = Proses_riwayat::where('kode_transaksi','=',$id)->orderBy('created_at', 'asc')->get();
        return view('admin.layanan.penjualantanah', compact('layanan','riwayat'));
    }

    public function update_tanah(Request $request, $id)
    {
        $layanan = Jualtanah::where('kode_transaksi','=',$id)->first();
        // dd($request->all());
        $layanan->proses = $request->proses;
        $layanan->maps = $request->maps;
        $layanan->moservicer = $request->moservicer;
        $layanan->relander = $request->relander;
        $foto_evidenceName = time() . '.' . $request->foto_evidence->extension();
        $request->foto_evidence->move(public_path('/Template/images/jualtanah'), $foto_evidenceName);
        $layanan->foto_evidence = $foto_evidenceName;
        
        if ($request->proses) {
            $riwayat = new Proses_riwayat;
            $riwayat->kode_transaksi = $id;
            $riwayat->proses = $request->proses;
            $riwayat->save();

            if ($request->proses == 'Selesai') {
                $layanan->status = 1;
            }else if($request->proses == 'Gagal') {
                $layanan->status = 2;
            }
        }
        $layanan->save();

        return redirect('/admin/layanan/jualtanah/'.$id);
    }
}
