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
            <p>{{$produk->alamat}},{{ $produk->kota }},{{ $produk->provinsi }}</p>
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
        <img src="{{ asset('Template/images/'.$produk->foto1) }}" height="800" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('Template/images/'.$produk->foto2) }}" height="800" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('Template/images/'.$produk->foto3) }}" height="800" class="d-block w-100" alt="...">
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
            <h1 style="color:#30A139"> <b>Harga : Rp {{number_format($produk->harga)}}/m<sup>2</sup></b> </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2>Deskripsi Tanah</h2>
            <p>{{$produk->deskripsi}}.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <h3>Spesifikasi Tanah</h3>
            <p>Luas Tanah : {{$produk->luas}} m<sup>2</sup></p>
            <p>Pemilik : {{$produk->user_id}}</p>
            
        </div>
        <div class="col-6">
            <h3>Cocok Untuk</h3>
            <p>{{$produk->cocok}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="d-grid mx-auto">
            @auth
            <button  class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal"><h2><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Transaksi</h2></button>
            @endauth
            @guest
            <a href="/login" class="btn btn-secondary"><h2><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Transaksi (Login First)</h2></a>
            @endguest
          </div>
        </div>
        <div class="col-4">
          <div class="d-grid mx-auto">
              <a href="https://wa.me/082216136564" class="btn btn-warning"><h2><i class="fa fa-comment" aria-hidden="true"></i>&nbsp;Chat</h2></a>
          </div>
      </div>
        <div class="col-4">
            <div class="d-grid mx-auto">
                <a href="https://www.google.com/maps/place/Telkom+University/@-6.9733165,107.6281415,17z/data=!3m1!4b1!4m5!3m4!1s0x2e68e9adf177bf8d:0x437398556f9fa03!8m2!3d-6.9733165!4d107.6303302" class="btn btn-warning"><h2><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Maps</h2></a>
            </div>
        </div>
    </div>
  </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Yakin membeli tanah di {{ $produk->alamat }},Kota {{ $produk->kota }},provinsi{{ $produk->provinsi }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <form action="{{ Route("transaksi.store") }}" method="post" enctype="multipart/form">
      @csrf
      <div class="modal-body">  
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Masukan luas yang ingin anda beli (m<sup>2</sup>)</label>
          <b><p>*Maksimum {{ $produk->luas }} m<sup>2</sup></p></b>
          <input type="hidden" name="product_id" value="{{ $produk->id}}">
          <input type="hidden" name="id_penjual" value="{{ $produk->user_id}}">
          <input type="hidden" name="harga" value="{{ $produk->harga}}">
          <input type="hidden" name="alamat" value="{{ $produk->alamat}},{{ $produk->kota }},{{ $produk->provinsi }}">
          <input type="hidden" name="foto" value="{{ $produk->foto1}}">
          <input type="number" name="luas" class="form-control" id="exampleFormControlInput1" min="1" max="{{ $produk->luas }}">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success">Beli Sekarang</button>
      </div>
    </form>
    </div>
  </div>
</div>
@endsection