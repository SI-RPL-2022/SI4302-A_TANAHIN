@extends('layouts.adminLayout')
@section ('produk')
active
@endsection
@section('konten')

<div class="container">
    <h3  class="mt-5"><a style="color:grey;text-decoration:none;" href="/admin/produk">Produk</a> <b style="color:green">/Edit Produk</b></h3> <br>
    <hr>

<form action="/admin/produk/update/{{ $produk->id }}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="text-right mb-3">
    <button type="reset" class="fw-bold btn mr-3" style="border-color:#F74C4C; color:#F74C4C; width:100px;" >Batal</button>
    <button type="submit" class="fw-bold btn" style="background-color:#0FA958; color:white; width:100px;" >Simpan</button>
</div>
<section>
        <div class="container shadow p-3 mt-3 mb-5 bg-white rounded">
            <br><br>
            <div class="form-group">
                <label for="kode"><b>Kode Pengajuan Jual Tanah</b></label>
                <input type="text" name="kode" class="form-control form-control-lg" id="kode" value="{{ $produk->kode_tanah }}" placeholder="" readonly>
            </div>
            <div class="form-group">
                <label for="user_id"><b>ID Pemilik</b></label>
                <input type="number" name="user_id" class="form-control form-control-lg" id="user_id" placeholder="" value="{{ $produk->user_id }}" readonly>
            </div>
            <div class="form-group">
                <label for="luas"><b>Luas Tanah</b></label>
                <input type="number" name="luas" class="form-control form-control-lg" id="luas" placeholder="" value="{{ $produk->luas }}">
            </div>
            <div class="form-group">
                <label for="alamat"><b>Alamat</b></label>
                <input type="text" name="alamat" class="form-control form-control-lg" id="alamat" value="{{ $produk->alamat }}">
            </div>
            <div class="form-group">
                <label for="kota"><b>Kota</b></label>
                <input type="text" name="kota" class="form-control form-control-lg" id="kota" value="{{ $produk->kota }}">
            </div>
            <div class="form-group">
                <label for="harga"><b>Harga/m<sup>2</sup></b></label>
                <input type="number" name="harga" class="form-control form-control-lg" id="harga" value="{{ $produk->harga }}">
            </div>
            <div class="form-group">
                <label for="cocok"><b>Cocok Untuk</b></label>
                <div class="form-group">
                    <input type="checkbox" name="cocok[]" value="Bisnis" id="cocok" <?php if (in_array("Bisnis", $cocok)) {
                                            echo 'checked';
                                        } ?>>
                    <label class="form-label">Bisnis</label>
                    <input type="checkbox" name="cocok[]" value="Pribadi" id="cocok" <?php if (in_array("Pribadi", $cocok)) {
                                            echo 'checked';
                                        } ?>>
                    <label class="form-label">Pribadi</label>
                    <input type="checkbox" name="cocok[]" value="Pabrik" id="cocok" <?php if (in_array("Pabrik", $cocok)) {
                                            echo 'checked';
                                        } ?>>
                    <label class="form-label">Pabrik</label>
                </div>
            </div>
            <div class="form-group">
                <label for="deskripsi"><b>Deskripsi</b></label>
                <textarea name="deskripsi" class="form-control form-control-lg" id="deskripsi">{{ $produk->deskripsi }}</textarea>
            </div>
            <label for="uploadsertifikat"><b>Upload sertifikat</b></label> <br>
            <div class="input-group mb-3">
                <input type="file" name="sertifikat" class="form-control" id="inputGroupFile02" accept=".pdf">
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
            </div>
            <label for="uploadsertifikat"><b>Upload Foto 1</b></label> <br>
            <div class="input-group mb-3">
                <input type="file" name="foto1" class="form-control" id="inputGroupFile02" accept=".jpg,.png">
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
            </div>
            <label for="uploadsertifikat"><b>Upload Foto 2</b></label>
            <div class="input-group mb-3">
                <input type="file" name="foto2" class="form-control" id="inputGroupFile02" accept=".jpg,.png">
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
            </div>
            
            <label for="uploadsertifikat"><b>Upload Foto 3</b></label>
            <div class="input-group mb-3">
                <input type="file" name="foto3" class="form-control" id="inputGroupFile02" accept=".jpg,.png">
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
            </div>
</section>
</form>
</div>
@endsection