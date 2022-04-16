@extends('master')
@section('profil')
active
@endsection

@section('content')

<div class="heading_container heading_center mb-4">
    <h2 class="font-weight-bold text-center" style="color:#30A139;">Riwayat Pengajuan Jual Tanah</h2>
</div>
<div class="d-flex justify-content-center">
    <a href="{{route('pengajuan.index.jualtanah',['id'=>Auth::user()->id])}}" type="button" class="btn btn-success btn-lg me-3">Jual Tanah</a>
    <a href="{{route('pengajuan.index.sertifikat',['id'=>Auth::user()->id])}}" type="button" class="btn btn-light btn-lg me-3">Sertifikat Tanah</a>
    <a href="{{route('pengajuan.index.bbn',['id'=>Auth::user()->id])}}" type="button" class="btn btn-light btn-lg me-3">BBN Tanah</a>
</div>
@foreach ($Jualtanah as $item)
<div class="card m-3">
        <div class="card-header">
            <div class="row">
            <div class="col-3">
                <button class="btn btn-success">Kode Pengajuan: {{ $item->id }}</button> 
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
            <div class="row">
                <div class="col-4">
                    <img src="{{asset('Template/images/jualtanah/'.$item->foto.'')}}" width="350px" height="200px" alt="">
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
                        <form action="{{route('pengajuan.delete.jualtanah')}}" method="post">
                            @csrf
                            <a href="/profil/pengajuan/detail" class="btn btn-success" type="button">Detail</a>
                            <a href="https://wa.me/082216136564" class="btn btn-warning" type="button">Chat</a>
                            <input type="hidden" name="id" value="{{$item->id}}">
                            <button class="btn btn-danger" type="submit" name="pengajuan.delete">Batalkan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endforeach

@endsection