@extends('master')
@section('produk')
active
@endsection

@section('content')
<section class="product_section">
    <div class="container">
        <div class="heading_container heading_center">'
            <br>
            <h2 style="color:#30A139;">
                Detail Tanah
            </h2>
            <p>Jalan Jalan</p>
        </div>
</section>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('Template/images/land.jpg') }}" height="800" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('Template/images/land.jpg') }}" height="800" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('Template/images/land.jpg') }}" height="800" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-12">
            <h1 style="color:#30A139"> <b>Harga : Rp 500000/m<sup>2</sup></b> </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2>Deskripsi Tanah</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut nulla doloremque odit tempora. Inventore aliquid alias vero. Sapiente, dolore repellat eum cumque quae esse quibusdam dignissimos fugit officia maxime possimus!</p>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <h3>Spesifikasi Tanah</h3>
            <p>Luas Tanah : 1300 m<sup>2</sup></p>
            <p>Pemilik : Bima</p>
            
        </div>
        <div class="col-6">
            <h3>Cocok Untuk</h3>
            <p>Bisnis</p>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="d-grid mx-auto">
            <a href="/produk/beli" class="btn btn-warning"><h2><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Transaksi</h2></a>
            </div>
        </div>
        <div class="col-6">
            <div class="d-grid mx-auto">
                <button class="btn btn-warning"><h2><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Maps</h2></button>
            </div>
        </div>
    </div>
  </div>
@endsection