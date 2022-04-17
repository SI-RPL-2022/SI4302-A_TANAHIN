@extends('master')
@section('profil')
active
@endsection

@section('content')
<div class="container">
    <div class="heading_container heading_center mb-4">
        <h2 class="font-weight-bold text-center" style="color:#30A139;">Detail Pengajuan BBN Kode: {{ $BBN->id }}</h2>
    </div>

    <div class="row mb-4">
        <div class="col-6">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 style="color:#30A139">Pengajuan BBN Tanah</h4>
                        @if($BBN->status==0)
                        <p style="color:orange">Sedang Diproses</p>
                        @else
                        <p style="color:#30A139">Selesai</p>
                        @endif
                    </div>
                    <hr>
                    <div class="row">
                        <div class="d-flex justify-content-start">
                            <p class="ms-3">ID Pengajuan BBN</p>
                            <p class="ms-3"><b>{{ $BBN->id }}</b></p>
                        </div>
                        <div class="d-flex justify-content-start">
                            <p class="ms-3">Waktu Pengajuan</p>
                            <p class="ms-3"><b>{{ $BBN->created_at }}</b></p>
                        </div>
                        <div class="d-flex justify-content-start">
                            <p class="ms-3">Total Harga</p>
                            <p class="ms-3"><b>Rp.{{ $BBN->harga * $BBN->luas_tanah}},-</b></p>
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
                                <img src="{{asset('Template/images/bbntanah/'.$BBN->upload_foto_tanah.'')}}" class="d-block w-100" alt="...">
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="d-flex justify-content-start">
                        <p class="ms-3">Pemilik Tanah</p>
                        <p class="ms-3"><b>{{ $BBN->pemilik_lama }}</b></p>
                    </div>
                    <div class="d-flex justify-content-start">
                        <p class="ms-3">Luas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                        <p class="ms-3"><b>{{ $BBN->luas_tanah }}m<sup>2</sup> </b></p>
                    </div>
                    <div class="d-flex justify-content-start">
                        <p class="ms-3">Harga/m<sup>2</sup>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                        <p class="ms-3"> <b>Rp.{{$BBN->harga }},-</b> </p>
                    </div>
                    <div class="d-flex justify-content-start">
                        <p class="ms-3">Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                        <p class="ms-3"><b>{{ $BBN->alamat }}</b></p>
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
                                <p class="ms-3">Mo Servicer &nbsp;&nbsp;</p>
                            </div>
                            <div class="col-8">
                                <p><b>{{ $BBN->moservicer }}</b></p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <p class="ms-3">Relander &nbsp;&nbsp;</p>
                            </div>
                            <div class="col-8">
                                <p><b>{{ $BBN->relander }}</b></p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <p class="ms-3">Proses</p>
                            </div>
                            <div class="col-8">
                                <h5 style="color:#30A139">Penjual Input Tanah</h5>
                                <p style="color:#979797">Sabtu, 31 Januari 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 style="color:#30A139">Sertifikat Tanah</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="d-flex justify-content-start">
                            <p class="ms-3">Pemilik Lama</p>
                            <p class="ms-3"><b>{{ $BBN->pemilik_lama }}</b></p>
                        </div>
                        <div class="d-flex justify-content-start">
                            <p class="ms-3">Pemilik Baru</p>
                            <p class="ms-3"><b>{{ $BBN->pemilik_baru }}</b></p>
                        </div>
                        <div class="container mb-4">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="{{asset('Template/images/bbntanah/'.$BBN->upload_sertifikat.'')}}" class="d-block w-100" alt="...">
                                  </div>
                                </div>
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