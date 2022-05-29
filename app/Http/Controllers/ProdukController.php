<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Storage;


class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::all();
        return view('customer.e-commerce.produk', compact('produk'));   
    }

    public function admin()
    {
        $produk = Produk::all();
        return view('admin.produk.produk', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.produk.tambahproduk');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        // $sertifikat = time().'.'.$request->sertifikat->extension();
        // $request->sertifikat->move(public_path('produk/sertifikat'), $sertifikat);        

        // $foto1 = time().'.'.$request->foto1->extension();
        // $request->foto1->move(public_path('produk/foto'), $foto1);\

        // $foto2 = time().'.'.$request->foto2->extension();
        // $request->foto2->move(public_path('produk/foto'), $foto2);\

        // $foto3 = time().'.'.$request->foto3->extension();
        // $request->foto3->move(public_path('produk/foto'), $foto3);\

        $cocok = implode(', ', $request->cocok);

        $produk = new Produk;
        $produk->kode_tanah = $request->kode;
        $produk->user_id = $request->user_id;
        $produk->luas = $request->luas;
        $produk->alamat = $request->alamat;
        $produk->kota = $request->kota;
        $produk->harga = $request->harga;
        $produk->cocok = $cocok;
        $produk->deskripsi = $request->deskripsi;
        $produk->sertifikat = $request->file('sertifikat')->store('produk/sertifikat');
        $produk->foto1 = $request->file('foto1')->store('produk/foto');
        $produk->foto2 = $request->file('foto2')->store('produk/foto');
        $produk->foto3 = $request->file('foto3')->store('produk/foto');

        $produk->save();

        return redirect('/admin/produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::where('kode_tanah','=',$id)->first();
        return view('customer.e-commerce.detail', compact('produk'));
    }

    public function transaksi($id)
    {
        $kode = 120;
        $kode = $kode.rand(11111,99999);
        $transaksi = new Transaksi;

        $transaksi->kode_transaksi = $kode;
        $transaksi->produks_id = $id;
        $transaksi->user_id = auth()->user()->id;

        $transaksi->save();

        return redirect('/profil/riwayat');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::where('kode_tanah','=',$id)->first();
        $cocok = explode(", ", $produk->cocok);
        return view('admin.produk.editproduk', compact('produk','cocok'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $sertifikat = time().'.'.$request->sertifikat->extension();
        // $request->sertifikat->move(public_path('produk/sertifikat'), $sertifikat);        

        // $foto1 = time().'.'.$request->foto1->extension();
        // $request->foto1->move(public_path('produk/foto'), $foto1);\

        // $foto2 = time().'.'.$request->foto2->extension();
        // $request->foto2->move(public_path('produk/foto'), $foto2);\

        // $foto3 = time().'.'.$request->foto3->extension();
        // $request->foto3->move(public_path('produk/foto'), $foto3);\

        $cocok = implode(', ', $request->cocok);

        $produk = Produk::find($id);
        $produk->kode_tanah = $request->kode;
        $produk->user_id = $request->user_id;
        $produk->luas = $request->luas;
        $produk->alamat = $request->alamat;
        $produk->harga = $request->harga;
        $produk->cocok = $cocok;
        $produk->deskripsi = $request->deskripsi;

        if ($request->sertifikat) {
            $produk->sertifikat = $request->file('sertifikat')->store('produk/sertifikat');   
        }

        if ($request->foto1) {
            $produk->foto1 = $request->file('foto1')->store('produk/foto');
        }
        
        if ($request->foto2) {
            $produk->foto2 = $request->file('foto2')->store('produk/foto');
        }

        if ($request->foto3) {
            $produk->foto3 = $request->file('foto3')->store('produk/foto');
        }
        $produk->save();

        return redirect('/admin/produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $produk = Produk::find($id);

        Storage::delete($produk->image);

        $produk->delete();

        return redirect('/admin/produk');
    }
}
