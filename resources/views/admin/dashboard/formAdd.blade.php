@extends('layouts.adminLayout')
@section ('dashboard')
active
@endsection
@section('konten')

<div class="container">
    <h4 class="pt-5 mt-5">Tambah Data Tanah Potensial</h4>
    <form action="/admin/dashboard/tambah" method="POST" enctype="multipart/form-data">
        @csrf
        <section>
            <div class="container shadow p-3 bg-white rounded">
                <div class="form-group">
                    <label for="alamat"><b>Alamat</b></label>
                    <input type="text" name="alamat" class="form-control form-control-lg" id="alamay" placeholder="">
                </div>
                <div class="form-group">
                    <label for="harga"><b>Harga</b></label>
                    <input type="text" name="harga" class="form-control form-control-lg" id="harga" placeholder="">
                </div>
                <div class="text-right mb-3">
                    <button type="submit" class="fw-bold btn" style="background-color:#0FA958; color:white; width:100px;" >Simpan</button>
                </div>
        </section>
    </form>
</div>
@endsection