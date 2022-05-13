@extends('layouts.adminLayout')
@section ('layanan')
active
@endsection
@section('konten')
<div class="container">
    <h3  class="mt-5"><a style="color:grey;text-decoration:none;" href="/admin/layanan">Layanan</a> <b style="color:green">/ Penjualan Tanah</b></h3> <br>
    <hr>
<form action="#" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row mb-2">
        <div class="col">
            <button type="submit" class="btn btn-primary btn-lg">Update</button>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 style="color:#30A139">Transaksi</h4>
                        <p style="color:#F74C4C">
                            @if($layanan->status===0)
                            Sedang Diproses
                            @elseif($layanan->status===1)
                            Selesai
                            @endif
                        </p>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="d-flex justify-content-start">
                            <p class="col-md-4">Tanggal Pengajuan</p>
                            <p class="ms-3 col-md-8"><b>{{ \Carbon\Carbon::parse($layanan->created_at)->format('D, j F Y') }}</b></p>
                        </div>
                        <div class="d-flex justify-content-start">
                            <p class="col-md-4">Total</p>
                            <p class="ms-3 col-md-8"> <b>Rp {{number_format($layanan->luas_tanah*$layanan->harga)}},-</b> </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-stats">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 style="color:#30A139">Tanah</h4>
                        <p style="color:#21C7BD">Advertisement Boosted</p>
                    </div>
                    <hr>
                    <div class="container mb-4">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="{{ asset('/Template/images/jualtanah/'.$layanan->foto) }}" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            
                          </div>
                    </div>
                    <div class="d-flex justify-content-start">
                        <p class="col-md-4">Pemilik / Penjual</p>
                        <p class="col-md-8"><b>{{ $layanan->user->name }}</b></p>
                    </div>
                    <div class="d-flex justify-content-start">
                        <p class="col-md-4">Luas</p>
                        <p class="col-md-8"><b>{{ $layanan->luas_tanah }}m<sup>2</sup> </b></p>
                    </div>
                    <div class="d-flex justify-content-start">
                        <p class="col-md-4">Harga/m<sup>2</sup></p>
                        <p class="col-md-8"> <b>Rp {{number_format($layanan->luas_tanah*$layanan->harga)}},-</b> </p>
                    </div>
                    <div class="d-flex justify-content-start">
                        <p class="col-md-4">Alamat</p>
                        <p class="col-md-8"><b>{{ $layanan->alamat }}</b></p>
                    </div>
                    <div class="d-flex justify-content-start">
                        <p class="col-md-4">Deskripsi</p>
                        <p class="col-md-8"><b>{{ $layanan->deskripsi }}</b></p>
                    </div>
                    <div class="d-flex justify-content-start">
                        <p class="col-md-4">Sertifikat</p>
                        <p class="col-md-8"><b style="color:#389FC0"><a href="#">Sertifikat Tanah.pdf</a></b></p>
                    </div>
                    <div class="d-flex justify-content-start">
                        <p class="col-md-4">Map</p>
                        <p class="col-md-8"> <input type="text" class="form-control" name="maps" placeholder="Masukan notes" value="{{ $layanan->maps }}"> </p>
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
                            <div class="col-4">
                                <p class="ms-3">Servicer &nbsp;&nbsp;</p>
                            </div>
                            <div class="col-8">
                                <select class="form-select" name="servicer" aria-label="Default select example">
                                    <option selected disabled hidden>Pilih Servicer</option>
                                    <option value="Bima">Bima</option>
                                    <option value="Cahyo">Cahyo</option>
                                    <option value="Edbert">Edbert</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <p class="ms-3">Relander &nbsp;&nbsp;</p>
                            </div>
                            <div class="col-8">
                                <select class="form-select" name="relander" aria-label="Default select example">
                                    <option selected disabled hidden>Pilih Real Lander</option>
                                    <option value="Bima">Bima</option>
                                    <option value="Cahyo">Cahyo</option>
                                    <option value="Edbert">Edbert</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <p class="ms-3">Update Proses &nbsp;&nbsp;</p>
                            </div>
                            <div class="col-8">
                                <select class="form-select" name="proses" aria-label="Default select example">
                                    <option selected disabled hidden>Pilih Tahapan Proses</option>
                                    <option value="Penjual Input Tanah">Penjual Input Tanah</option>
                                    <option value="MoServicer Verifikasi Tanah">Servicer Verifikasi Tanah</option>
                                    <option value="Real Lander Survey Lokasi">Real Lander Survey Lokasi</option>
                                    <option value="Tanah Berhasil Dipasarkan">Tanah Berhasil Dipasarkan</option>
                                    <option value="Negosiasi Penawaran Customer">Negosiasi Penawaran Customer</option>
                                    <option value="Pembayaran ">Pembayaran </option>
                                    <option value="Pengiriman Sertifikat">Pengiriman Sertifikat</option>
                                    <option value="Selesai">Selesai</option>
                                  </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <p class="ms-3">Riwayat Proses</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <b style="color:#30A139"><p class="ms-3 mt-3">Hubungi Customer</p></b>
                            </div>
                            <div class="col-8">
                                <div class="justify-content-start">
                                    <a href="#" class="btn btn-success ms-3" style="color:white">Email</a>
                                    <a href="#" class="btn btn-warning ms-3" style="color:white">Chat</a>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-stats">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 style="color:#30A139">Photo Evidence</h4>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-4">
                            <p class="ms-3">Update Photo Evidence &nbsp;&nbsp;</p>
                        </div>
                        <div class="col-8">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="uploadfotoevidence" name="uploadfotoevidence">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('/Template/images/jualtanah/'.$layanan->foto_evidence) }}" class="d-block w-100" alt="photo evidence belum ditambahkan..">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection