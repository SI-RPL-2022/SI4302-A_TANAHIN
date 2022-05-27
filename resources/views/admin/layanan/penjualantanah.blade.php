@extends('layouts.adminLayout')
@section ('layanan')
active
@endsection
@section('konten')
<div class="container">
    <h3  class="mt-5"><a style="color:grey;text-decoration:none;" href="/admin/layanan">Layanan</a> <b style="color:green">/ Penjualan Tanah</b></h3> <br>
    <hr>
<form action="/admin/layanan/jualtanah/{{$layanan->kode_transaksi}}" method="POST" enctype="multipart/form-data">
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
                                <select class="form-select" name="moservicer" aria-label="Default select example">
                                    <option selected disabled hidden>Pilih Servicer</option>
                                    <option <?php if ($layanan->moservicer == "Bima") echo "selected";?> value="Bima">Bima</option>
                                    <option <?php if ($layanan->moservicer == "Cahyo") echo "selected";?> value="Cahyo">Cahyo</option>
                                    <option <?php if ($layanan->moservicer == "Edbert") echo "selected";?> value="Edbert">Edbert</option>
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
                                    <option <?php if ($layanan->relander == "Bima") echo "selected";?> value="Bima">Bima</option>
                                    <option <?php if ($layanan->relander == "Cahyo") echo "selected";?> value="Cahyo">Cahyo</option>
                                    <option <?php if ($layanan->relander == "Edbert") echo "selected";?> value="Edbert">Edbert</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <p class="ms-3">Update Proses &nbsp;&nbsp;</p>
                            </div>
                            <div class="col-8">
                                <select class="form-select" name="proses" aria-label="Default select example" value="{{ $layanan->proses }}">
                                    <option selected disabled hidden>Pilih Tahapan Proses</option>
                                    <option <?php if ($layanan->proses == "Penjual Input Tanah") echo "selected";?> value="Penjual Input Tanah">Penjual Input Tanah</option>
                                    <option <?php if ($layanan->proses == "MoServicer Verifikasi Tanah") echo "selected";?> value="MoServicer Verifikasi Tanah">Servicer Verifikasi Tanah</option>
                                    <option <?php if ($layanan->proses == "Real Lander Survey Lokasi") echo "selected";?> value="Real Lander Survey Lokasi">Real Lander Survey Lokasi</option>
                                    <option <?php if ($layanan->proses == "Tanah Berhasil Dipasarkan") echo "selected";?> value="Tanah Berhasil Dipasarkan">Tanah Berhasil Dipasarkan</option>
                                    <option <?php if ($layanan->proses == "Negosiasi Penawaran Customer") echo "selected";?> value="Negosiasi Penawaran Customer">Negosiasi Penawaran Customer</option>
                                    <option <?php if ($layanan->proses == "Pembayaran") echo "selected";?> value="Pembayaran">Pembayaran </option>
                                    <option <?php if ($layanan->proses == "Pengiriman Sertifikat") echo "selected";?> value="Pengiriman Sertifikat">Pengiriman Sertifikat</option>
                                    <option <?php if ($layanan->proses == "Selesai") echo "selected";?> value="Selesai">Selesai</option>
                                    <option <?php if ($layanan->proses == "Gagal") echo "selected";?> value="Gagal">Gagal</option>
                                  </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <p class="ms-3">Riwayat Proses</p>
                            </div>
                        @foreach($riwayat as $key)
                            <div class="col-md-8">
                                <h5 style="color:#30A139">{{$key->proses}}</h5>
                                <p style="color:#979797">{{ \Carbon\Carbon::parse($key->created_at)->format('D, j F Y')}}</p>
                            </div>
                            <div class="col-md-4"></div>
                        @endforeach
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
                            <div class="form-input">
                                <input type="file" id="foto_evidence" name="foto_evidence" value="{{ $layanan->foto_evidence }}" accept=".jpg,.png"/>
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
</form>
@endsection