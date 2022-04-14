@extends('master')
@section('profil')
active
@endsection

@section('content')
<section>
    <div class="container">
        <div class="heading_container heading_center">'
            <br>
            <h2 style="color:#30A139;">
                Riwayat Pengajuan Sertifikat
            </h2>
        </div>
</section>

<div class="container">
    @foreach($pengajuan as $data)
    <div class="card mb-3">
        <div class="card-header">
          <div class="row">
            <div class="col-3">
                <button class="btn btn-success">Pengajuan Sertifikat</button> 
            </div>
            <div class="col-7 mt-2">
                <p>{{$data->created_at}}</p>
            </div>
            <div class="col-2 mt-2">
                <p style="color:orange">@if($data->status===1)
                        Sedang Diproses
                        @elseif($data->status===2)
                        Selesai
                        @endif</p>
            </div>
        </div>
        </div>
        <div class="card-body">
            <div class="row ">
                <div class="col-4">
                    <img src="{{asset('storage/'.$data->foto)}}" width="350px" height="200px" alt="">
                </div>
                <div class="col-5 mt-3">
                    <h3>Rp {{ number_format($data->harga) }}/m<sup>2</sup></h3>
                    <p>{{ $data->alamat }}</p>
                    <br>
                    <p> <b>{{$data->luas_tanah}} m<sup>2</sup></b> </p>
                </div>
                <div class="col-3 mt-2">
                    <p>Total</p>
                    <h3>Rp {{ number_format($data->luas_tanah*$data->harga) }}</h3>
                    <br>
                    <br>
                    <div class="d-grid gap-2 d-md-block">
                        <a href="/profil/pengajuan/detail/{{$data->kode_transaksi}}" class="btn btn-success" type="button">Detail</a>
                        <button class="btn btn-warning" type="button">Chat</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
