@extends('master')
@section('produk')
active
@endsection
@section('content')
<section>
    <div class="container">
        <div class="heading_container heading_center">'
            <br>
            <h2 style="color:#30A139;">
                E-Commerce
            </h2>
            <p>E-Commerce tempat jual beli tanah yang aman dan terpercaya berisikan lebih dari 1000 tanah Indonesia</p>

            
        </div>
</section>



<div class="Search my-5">
    <div class="row height d-flex justify-content-center align-items-center">
        <div class="col-md-6">
                <form action="/produk">
                    <div class="input-group rounded">
                        <input type="text" name="search" style="height=20px;" class="form-control rounded" placeholder="Cari Product Disini" aria-label="Search" aria-describedby="search-addon" value="{{request('search')}}"/>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                        </div>
                    </form>
            
        </div>


        <div class="text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 md-5">
                        <br><br> 
                            <div class="title">
                                <ul class="categiri">
                                    <li class="active"><a href="/produk">All</a></li>
                                    <li class=""><a href="{{ Route('ecommerce-filter', ['cocok' => 'pribadi']) }}">Pribadi</a></li>
                                    <li class=""><a href="{{ Route('ecommerce-filter', ['cocok' => 'bisnis']) }}">Bisnis</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <br><br> 
        </div>
    </div>
</div>

<section class="arrival_section">
    <div class="container p-3">
       <div class="box" style="height: fit-content;">
          <div class="arrival_bg_box">
             <img src="{{asset('Template/images/produk_landing.png')}}" width="300px" alt="">
          </div>
          <div class="row">
             <div class="col-md-6 ml-auto">
                <div class="">
                   <div class="heading_container">
                      <h2 style="color: white">
                         Market Place
                      </h2>
                   </div>
                   <p style="margin-top: 20px;margin-bottom: 30px;color:white;">
                    Marketplace adalah layanan utama Tanahin. Marketplace merupakan tempat jual beli tanah yang mempertemukan penjual dan pembeli tanah secara digital. Pembelian tanah ini nantinya bisa dijadikan sebagai investasi karena semakin lama harga tanah akan naik. 
                   </p> </div>
                </div>
             </div>
          </div>
       </div>
    </div>

    
</section>

<div class="container">
    <h2 align="center" style="color:#30A139; class="mb-3 mt-3">
        <b>List Tanah Kavling</b>
    </h2>
    <br>
    <div class="row">
        @foreach($product as $data)
        <div class="col-sm-6 col-md-4 col-lg-4 mb-4">
           <div class="card" style="width: 22.5rem;">
              <img class="card-img-top" src="{{ asset('Template/images/'.$data->foto1) }}" alt="Card image cap">
              <div class="card-body">
                 <h3>Rp {{number_format($data->harga)}}/m<sup>2</sup></h3>
                <h5 class="card-title">{{$data->alamat}}</h5>
                <p class="card-text">Cocok Untuk : {{$data->cocok}}</p>
                <a href="{{ Route('ecommerce-detail', ['id' => $data->id]) }}" class="btn btn-success">Detail</a>
              </div>
            </div>
        </div>
     @endforeach
        
    </div>
        
        
    <div class="paginate-container mb-2">
        <div class="pagination justify-content-center mt-4">
            {{$product -> links()}}
        </div>
    </div>
    <br><br><br><br>
    
</div>


@endsection