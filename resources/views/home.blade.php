@extends('master')
@section('beranda')
active
@endsection
@section('content')

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
      
@endsection