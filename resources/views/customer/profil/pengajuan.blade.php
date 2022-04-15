@extends('master')
@section('profil')
active
@endsection

@section('content')

<div class="heading_container heading_center">
    <h2 class="font-weight-bold text-center" style="color:#30A139;">Riwayat Pengajuan</h2>
</div>
@foreach ($bbn as $item)
<div class="card m-5">
        <div class="card-header">
            <div class="row">
            <div class="col-3">
                <button class="btn btn-success">Pengajuan Penjualan Tanah</button> 
            </div>
            <div class="col-7 mt-2">
                <p>{{$item->created_at}}</p>
            </div>
            <div class="col-2 mt-2">
                <p style="color:orange">Sedang Diproses</p>
            </div>
        </div>
        </div>
        <div class="card-body">
            <div class="row mb">
                <div class="col-4">
                    <img src="{{asset('storage/'.$item->upload_foto_tanah.'')}}" width="350px" height="200px" alt="">
                </div>
                <div class="col-5 mt-3">
                    <h3>RP. {{$item->harga}}/m<sup>2</sup></h3>
                    <p>{{$item->alamat}}</p>
                    <br>
                    <p> <b>{{$item->luas_tanah}} m<sup>2</sup></b> </p>
                </div>
                <div class="col-3 mt-2">
                    <p>Total</p>
                    <h3>Rp. {{$item->harga * $item->luas_tanah}}</h3>
                    <br>
                    <br>
                    <div class="d-grid gap-2 d-md-block">
                        <form action="{{route('pengajuan.delete')}}" method="post">
                            @csrf
                            <a href="/profil/pengajuan/detail" class="btn btn-success" type="button">Detail</a>
                            <button class="btn btn-warning" type="button">Chat</button>
                            <input type="hidden" name="id" value="{{$item->id}}">
                            <button class="btn btn-danger" type="submit" name="pengajuan.delete">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endforeach

@endsection