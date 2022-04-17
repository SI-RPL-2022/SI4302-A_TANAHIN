@extends('master')
@section('layanan')
active
@endsection
@section('content')

<div class="heading_container heading_center">
    <h2 class="font-weight-bold text-center" style="color:#30A139;">Form Pembuatan Sertifikat Tanah</h2>
</div>

@if (isset($info))
<div class="container mt-3 mb-3">
    @if ($info=="Berhasil")
    <div class="alert alert-success" role="alert">
        Berhasil melakukan pengajuan Sertifikat Tanah
    </div>
    @elseif ($info=="Gagal")
    <div class="alert alert-danger" role="alert">
        Gagal melakukan pengajuan Sertifikat Tanah
    </div>
    @endif
</div>
@endif
<section>
    <form action="/layanan/buatsertif" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container shadow p-3 mt-3 mb-5 bg-white roundedr">
            <br><br>
            <div class="form-group">
                <label for="luas"><b>Luas Tanah</b></label>
                <input type="number" class="form-control form-control-lg" id="luas" name="luas" placeholder="">
            </div>
            <div class="form-group">
                <label for="alamat"><b>Alamat</b></label>
                <input type="text" class="form-control form-control-lg" id="alamat" name="alamat">
            </div>
            <div class="form-group">
                <label for="harga"><b>Harga/m<sup>2</sup></b></label>
                <input type="number" class="form-control form-control-lg" id="harga" name="harga">
            </div>
            <div class="form-group">
                <label for="deskripsi"><b>Deskripsi</b></label>
                <textarea class="form-control form-control-lg" id="deskripsi" name="deskripsi"></textarea>
            </div>

            <div class="form-group">
                <label for="uploadfototanah"><b>Upload Foto Tanah</b></label>
                <input type="file" id="uploadfototanah" name="uploadfototanah" accept="jpeg,png,jpg,svg"/>
            </div>
            <br>
            <button style="background-color:#F7CF4C; width:100%; height:50px; border-radius:25px;" class="btn" type="submit"><b>Submit</b></button>
    </form>
</section>

@endsection