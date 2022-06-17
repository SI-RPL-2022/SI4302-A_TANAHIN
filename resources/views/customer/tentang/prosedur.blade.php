@extends('master')
@section('tentang')
active
@endsection
@section('content')

<div class="heading_container heading_center">
    <h2 class="font-weight-bold text-center" style="color:#30A139;">Prosedur</h2>
</div>

<div class="container">
    <div class="row ">
        <div class="col-lg-6 mb-3 mr-5">
            <h2 class="my-3">Menjual Tanah Di Tanahin</h2>
            <ol class="text-justify">
                <li>Penjual mempersiapkan kelengkapan surat-surat tanah.</li>
                <li>Jika tanah yang dijual belum lengkap, penjual akan diberikan pilihan untuk menggunakan layanan Tanahin pengurusan sertifikat
                <li>Jika tanah yang dijual sudah lengkap, penjual akan memasukan formulir pendaftaran agar tanahnya dapat ditampilkan di marketplace
                <li>Real Lander akan melakukan validasi ke lokasi penjualan tanah jika data yang dimasukan tidak meyakinkan
            </ol>
        </div>
        <div class="col-lg-5 mb-3 ml-5">
            <img style="width:350px;height:auto" src="{{ asset('Template/images/prosedur1.png') }}" alt="">
        </div>
    </div>

    <div class="row ">
        <div class="col-lg-5 mb-3 ml-5">
            <img style="width:350px;height:auto" src="{{ asset('Template/images/prosedur2.png') }}" alt="">
        </div>
        <div class="col-lg-6 mb-3">
            <br>
            <br>
            <h2 class="my-3">Membeli Tanah Di Tanahin</h2>
            <ol class="text-justify">
                <li>Pembeli memilih tanah di e-commerce Tanahin
                <li>Pembeli dapat bertanya-tanya kepada Customer Service Tanahin mengenai tanah yang akan dibeli
                <li>Pembeli melakukan pembayaran melalui transfer bank ke Rekening Tanahin
                <li>Pembeli menerima kelengkapan surat-surat tanah
                </ol>
        </div>
    </div>

    <br>
    <div class="row ">
        <div class="col-lg-6 mb-3 mr-5">
            <br>
            <br>
            <h2 class="my-3">Layanan Administrasi Pembuatan Sertifikat Baru atau Ganti Nama Sertifikat</h2>
            <ol class="text-justify">
                <li>Pengguna melakukan pengisian formulir layanan administrasi
                <li>Admin akan menghubungi pengguna untuk menentukan jadwal survey
                <li>Real Lander dan Mapping Expert akan datang langsung ke lokasi untuk membantu pengguna
                <li>Pengguna dapat menunggu hasilnya            </ol>
        </div>
        <div class="col-lg-5 mb-3 ml-5">
            <img style="width:350px;height:auto" src="{{ asset('Template/images/prosedur3.png') }}" alt="">
        </div>
    </div>

@endsection