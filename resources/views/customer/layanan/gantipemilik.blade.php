@extends('master')
@section('layanan')
active
@endsection
@section('content')

<div class="heading_container heading_center">
    <h2 class="font-weight-bold text-center" style="color:#30A139;">Form Pergantian Pemilik Tanah</h2>
</div>

<section>
    <form action="/layanan/gantipemilik/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container shadow p-3 mt-3 mb-5 bg-white rounded">
            <br><br>
            <div class="form-group">
                <label for="luas"><b>Luas Tanah</b></label>
                <input type="number" name="luas" class="form-control form-control-lg" id="luas" placeholder="">
            </div>
            <div class="form-group">
                <label for="alamat"><b>Alamat</b></label>
                <input type="text" name="alamat" class="form-control form-control-lg" id="alamat">
            </div>
            <div class="form-group">
                <label for="harga"><b>Harga/m<sup>2</sup></b></label>
                <input type="number" name="harga" class="form-control form-control-lg" id="harga">
            </div>
            <div class="form-group">
                <label for="pemiliklama"><b>Pemilik Lama</b></label>
                <input type="text" name="pemiliklama" class="form-control form-control-lg" id="pemiliklama">
            </div>
            <div class="form-group">
                <label for="pemilikbaru"><b>Pemilik Baru</b></label>
                <input type="text" name="pemilikbaru" class="form-control form-control-lg" id="pemilikbaru">
            </div>

            <div class="form-group">
                <label for="uploadsertifikat"><b>Upload Sertifikat</b></label>
                <input type="file" id="uploadsertifikat" name="uploadsertifikat" accept=".pdf,.doc"/>
            </div>
            
            <div class="form-group">
                <label for="uploadfototanah"><b>Upload Foto Tanah</b></label>
                <input type="file" id="uploadfototanah" name="uploadfototanah" accept=".jpg,.png"/>
            </div>

            <br>
            <button style="background-color:#F7CF4C; width:100%; height:50px; border-radius:25px;" class="btn" type="submit"><b>Submit</b></button>

</form>
</section>

@endsection