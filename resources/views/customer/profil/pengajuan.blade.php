@extends('master')
@section('profil')
active
@endsection

@section('content')

<div class="card m-5">
        <div class="card-header">
          <div class="row">
            <div class="col-3">
                <button class="btn btn-success">Pengajuan Penjualan Tanah</button> 
            </div>
            <div class="col-7 mt-2">
                <p>15 Januari 2022</p>
            </div>
            <div class="col-2 mt-2">
                <p style="color:orange">Sedang Diproses</p>
            </div>
        </div>
        </div>
        <div class="card-body">
            <div class="row ">
                <div class="col-4">
                    <img src="{{asset('Template/images/tanah.jpg')}}" width="350px" height="200px" alt="">
                </div>
                <div class="col-5 mt-3">
                    <h3>RP.25000/m<sup>2</sup></h3>
                    <p>Jalan Haliman 1 No 1, RT/RW 01/02, Jekan Raya, Palangkaraya</p>
                    <br>
                    <p> <b>3000 m<sup>2</sup></b> </p>
                </div>
                <div class="col-3 mt-2">
                    <p>Total</p>
                    <h3>Rp.126.500.000</h3>
                    <br>
                    <br>
                    <div class="d-grid gap-2 d-md-block">
                        <a href="/profil/pengajuan/detail" class="btn btn-success" type="button">Detail</a>
                        <button class="btn btn-warning" type="button">Chat</button>
                        <button class="btn btn-danger" type="button">Batalkan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection