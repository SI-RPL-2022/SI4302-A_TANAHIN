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
      
@endsection