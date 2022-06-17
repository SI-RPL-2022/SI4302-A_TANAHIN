<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\TanahPotensial;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        $kategoriTanah = Product::selectRaw('monthname(created_at) as month')
            ->groupBy('month')
            ->orderByRaw('min(created_at) asc')
            ->pluck('month');

        $dataTotalTanah = Product::selectRaw('sum(harga) as total_harga')
            ->groupBy(DB::raw("monthname(created_at)"))
            ->orderByRaw('min(created_at) asc')
            ->pluck('total_harga');

        $dataRataanTanah = Product::selectRaw('avg(harga) as total_harga')
            ->groupBy(DB::raw("monthname(created_at)"))
            ->orderByRaw('min(created_at) asc')
            ->pluck('total_harga');

        $dataTanahPotensial = TanahPotensial::orderBy('harga', 'DESC')->take(5)->get();
            
        // $tanah = Product::all();
        // dd($dataRataanTanah);

        return view('admin.dashboard.dashboard', ['kategoriTanah' => $kategoriTanah, 'dataTotalTanah' => $dataTotalTanah, 
                                                'dataRataanTanah' => $dataRataanTanah, 'dataTanahPotensial' => $dataTanahPotensial]);
    }
    public function add()
    {
        return view('admin.dashboard.formAdd');
    }
    public function store(Request $request)
    {
        // dd($request);
        $tanahPotensial = TanahPotensial::create([
            'alamat' => $request['alamat'],
            'harga' => $request['harga'],
        ]);

        return redirect('/admin/dashboard');
    }
}
