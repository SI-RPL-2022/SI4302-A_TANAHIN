@extends('master')
@section('beranda')
active
@endsection
@section('content')
@if (isset($info))
<div class="container-fluid">
    <div class="alert alert-warning" role="alert">
        Berhasil membatalkan pengajuan BBN Tanah
    </div>
</div>
@endif
@if (isset($info2))
<div class="container-fluid">
    <div class="alert alert-warning" role="alert">
        Berhasil membatalkan pengajuan Jual Tanah
    </div>
</div>
@endif
@if (isset($info3))
<div class="container-fluid">
    <div class="alert alert-warning" role="alert">
        Berhasil membatalkan pengajuan Sertifikat Tanah
    </div>
</div>
@endif
<!-- end header section -->

         <!-- slider section -->
         <section class="slider_section ">
            <div class="slider_bg_box">
            </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <span>
                                    Apa itu Tanahin?
                                    </span>
                                 </h1>
                                 <p style="color:white">
                                    Tanahin adalah produk yang berfokus pada lahan yang dapat membantu masyarakat Indonesia dengan basis aplikasi website.
                                 </p>
                                 <div class="btn-box">
                                    <a href="/produk" class="btn1">
                                    Beli Tanah Sekarang
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-7 col-lg-6 ">
                              <img src="{{ asset('Template/images/landing1.png') }}" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item ">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <img src="{{ asset('Template/images/landing2.png') }}" width="550px" alt="">
                           </div>
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <span>
                                    Dashboard Tanah
                                    </span>
                                 </h1>
                                 <p style="color:white">
                                    Perhatikan harga rata-rata tanah disekitar anda
                                 </p>
                                 <img src="{{ asset('Template/images/landing2.1.png') }}" width="250px" alt="">
                                 <div class="btn-box">
                                    <a href="/profil/dashboard" class="btn1">
                                    Cek Dashboard Sekarang
                                    </a>
                                 </div>
                              </div>
                           </div>
                          
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <span>
                                    Asset Monitoring
                                    </span>
                                 </h1>
                                 <p style="color:white" >
                                    Pastikan perubahan nilai asset tanah yang anda miliki bernilai positif
                                 </p>
                                 <img src="{{ asset('Template/images/landing3.1.png') }}" width="300px" alt="">
                                 <div class="btn-box">
                                    <a href="/profil/asset" class="btn1">
                                    Monitoring Asset Anda Sekarang
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-7 col-lg-6 ">
                              <img src="{{ asset('Template/images/landing3.png') }}" width="600px" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container">
                  <ol class="carousel-indicators">
                     <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                     <li data-target="#customCarousel1" data-slide-to="1"></li>
                     <li data-target="#customCarousel1" data-slide-to="2"></li>
                  </ol>
               </div>
            </div>
         </section>
         <!-- end slider section -->

      </div>

      <!-- why section -->
      <section class="why_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Kenapa Anda Perlu Memilih Kami?
               </h2>
            </div>
            <div class="row">
               <div class="col-md-3">
                  <div class="box ">
                     <div class="img-box">

                     </div>
                     <div class="detail-box">
                        <p align="center"><img src="{{ asset('Template/images/layanan_icon.png') }}" width="100px" alt=""></p>
                        <h5>
                           Persuratan
                        </h5>
                        <p>
                           Anda bisa membuat sertifikat tanah,melakukan balik nama sertifikat.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="box ">
                     <div class="img-box">

                     </div>
                     <div class="detail-box">
                        <p align="center"><img src="{{ asset('Template/images/produk_icon.png') }}" width="100px" alt=""></p>
                        <h5>
                           E-Commerce
                        </h5>
                        <p>
                           Tempat jual beli tanah yang diawasi OJK dan Badan Pertahanan Nasional.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="box ">
                     <div class="img-box">

                     </div>
                     <div class="detail-box">
                        <p align="center"><img src="{{ asset('Template/images/edu_icon.png') }}" width="100px" alt=""></p>
                        <h5>
                           Edukasi
                        </h5>
                        <p>
                           Pembelajaran lengkap mengenai potensi beserta resiko Investasi Tanah.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                <div class="box ">
                   <div class="img-box">
                   </div>
                   <div class="detail-box">
                     <p align="center"><img src="{{ asset('Template/images/monitoring_icon.png') }}" width="100px" alt=""></p>
                      <h5>
                        Monitoring
                      </h5>
                      <p>
                         Berisikan Dashboard harga rata-rata tanah beserta asset yang Anda miliki.
                      </p>
                   </div>
                </div>
             </div>
            </div>
         </div>
      </section>
      <!-- end why section -->

      <!-- product section -->
      <section style="background: linear-gradient(to right, #84C038, #30A139, #157C1D);" class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2 style="color:white">
                  Tanah <span>Favorit</span>
               </h2>
            </div>
            <div class="row">
            @foreach ($product as $key)
               <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
                  <div class="card" style="width: 22.5rem;">
                  <img src="{{asset('Template/images/'.$key->foto1.'')}}" alt="">                     
                  <div class="card-body">
                        <h3>Rp.{{$key->harga}}/m<sup>2</sup></h3>
                       <h5 class="card-title">{{$key->alamat}}</h5>
                       <p class="card-text">{{$key->kota}}, {{$key->provinsi}}</p>
                       <a href="/produk/detail" class="btn btn-success">Detail</a>
                     </div>
                   </div>
               </div>
            @endforeach
            </div>
            <div class="btn-box">
               <a href="/produk">
               Lihat Semua Tanah
               </a>
            </div>
         </div>
      </section>
      <!-- end product section -->

      <!-- client section -->
      <section class="client_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Testimoni Pelanggan
               </h2>
            </div>
            <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="box col-lg-10 mx-auto">
                        <div class="img_container">
                           <div class="img-box">
                              <div class="img_box-inner">
                                 <img src="{{ asset('Template/images/client.jpg') }}" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="detail-box">
                           <h5>
                              Anna Trevor
                           </h5>
                           <h6>
                              Customer
                           </h6>
                           <p>
                              Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="box col-lg-10 mx-auto">
                        <div class="img_container">
                           <div class="img-box">
                              <div class="img_box-inner">
                                 <img src="{{ asset('Template/images/client.jpg') }}" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="detail-box">
                           <h5>
                              Anna Trevor
                           </h5>
                           <h6>
                              Customer
                           </h6>
                           <p>
                              Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="box col-lg-10 mx-auto">
                        <div class="img_container">
                           <div class="img-box">
                              <div class="img_box-inner">
                                 <img src="{{ asset('Template/images/client.jpg') }}" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="detail-box">
                           <h5>
                              Anna Trevor
                           </h5>
                           <h6>
                              Customer
                           </h6>
                           <p>
                              Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel_btn_box">
                  <a class="carousel-control-prev" href="#carouselExample3Controls" role="button" data-slide="prev">
                  <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExample3Controls" role="button" data-slide="next">
                  <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                  <span class="sr-only">Next</span>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <!-- end client section -->
@endsection