@extends('master')
@section('profil')
active
@endsection
@section('content')
<section class="product_section">
    <section>
        <div class="container">
            <div class="heading_container heading_center">'
                <br>
                <h2 style="color:#30A139;">
                    Riwayat Transaksi
                </h2>
            </div>
    </section>
</section>

<div class="container">

    @foreach ($transaksi as $transaksi)
    <div class="card mb-3">
        <div class="card-header">
          <div class="row">
            <div class="col-1">
                <button class="btn btn-success">Beli</button> 
            </div>
            <div class="col-9 mt-2">
                <p>{{ $transaksi->created_at }}</p>
            </div>
            <div class="col-2 mt-2">
                @if ($transaksi->status == '0')
                <p style="color:orange">Diproses</p>
                @else
                <p style="color:#30A139">Selesai</p>
                @endif
            </div>
        </div>
        </div>
        <div class="card-body">
            <div class="row ">
                <div class="col-4">
                    <img src="{{ asset('Template/images/'.$transaksi->foto) }}" width="350px" height="200px" alt="">
                </div>
                <div class="col-5 mt-3">
                    <h3>RP.{{ $transaksi->harga }}</sup></h3>
                    <p>{{ $transaksi->alamat }}</p>
                    <br>
                    <p>Luas yang dibeli : <b>{{ $transaksi->luas }} m<sup>2</sup></b> </p>
                </div>
                <div class="col-3 mt-2">
                    <div class="d-grid gap-2 d-md-block">
                        <a href="/produk/detail/{{ $transaksi->product_id }}" class="btn btn-success" type="button">Detail</a>
                        @if ($transaksi->status == '0')
                        <button class="btn btn-secondary" type="button">Feedback</button>
                        @else
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Feedback</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach



    <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Feedback</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Comments</label>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success">Submit</button>
        </div>
      </div>
    </div>
</div>
</div>
@endsection