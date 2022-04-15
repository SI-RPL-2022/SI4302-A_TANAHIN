@extends('master')
@section('profil')
active
@endsection
@section('content')
<div class="container">
    <h3  class="mt-5"><a style="color:grey;text-decoration:none;" href="/profil/pengajuan">Pengajuan</a> <b style="color:green">/Detail Pengajuan</b></h3> <br>
    <hr>

    <div class="row">
        <div class="col-6">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 style="color:#30A139">Pengajuan Sertifikat</h4>
                        <p style="color:#F74C4C">
                            @if($pengajuan->status===1)
                            Sedang Diproses
                            @elseif($pengajuan->status===2)
                            Selesai
                            @endif
                        </p>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="d-flex justify-content-start">
                            <p class="col-md-5">ID Pengajuan </p>
                            <p class="ms-3 co7-md-8"><b>{{$pengajuan->kode_transaksi}}</b></p>
                        </div>
                        <div class="d-flex justify-content-start">
                            <p class="col-md-5">Tanggal Pengajuan</p>
                            <p class="ms-3 co7-md-8"><b>{{ \Carbon\Carbon::parse($pengajuan->created_at)->format('D, j F Y') }}</b></p>
                        </div>
                        <div class="d-flex justify-content-start">
                            <p class="col-md-5">Total</p>
                            <p class="ms-3 co7-md-8"> <b>Rp {{number_format($pengajuan->luas_tanah*$pengajuan->harga)}},-</b> </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-stats">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 style="color:#30A139">Tanah</h4>
                    </div>
                    <hr>
                    <div class="container mb-4">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="{{ asset('storage/'.$pengajuan->foto) }}" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            
                          </div>
                    </div>
                    <div class="d-flex justify-content-start">
                        <p class="col-md-5">Pemilik / Penjual</p>
                        <p class="col-md-7"><b>{{ $pengajuan->user->name }}</b></p>
                    </div>
                    <div class="d-flex justify-content-start">
                        <p class="col-md-5">Luas</p>
                        <p class="col-md-7"><b>{{ $pengajuan->luas_tanah }}m<sup>2</sup> </b></p>
                    </div>
                    <div class="d-flex justify-content-start">
                        <p class="col-md-5">Harga/m<sup>2</sup></p>
                        <p class="col-md-7"> <b>Rp {{number_format($pengajuan->luas_tanah*$pengajuan->harga)}},-</b> </p>
                    </div>
                    <div class="d-flex justify-content-start">
                        <p class="col-md-5">Alamat</p>
                        <p class="col-md-7"><b>{{ $pengajuan->alamat }}</b></p>
                    </div>
                    <div class="d-flex justify-content-start">
                        <p class="col-md-5">Deskripsi</p>
                        <p class="col-md-7"><b>{{ $pengajuan->deskripsi }}</b></p>
                    </div>
                    <div class="d-flex justify-content-start">
                        <p class="col-md-5">Sertifikat</p>
                        
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-6">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 style="color:#30A139">Proses</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <p class="ms-3">Proses</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

<br><br>

</div>
@endsection