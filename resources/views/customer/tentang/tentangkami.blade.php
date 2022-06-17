@extends('master')
@section('tentang')
active
@endsection
@section('content')

<section class="client_section">

        <div class="heading_container heading_center">
            <h2 class="font-weight-bold text-center" style="color:#30A139;">Tentang Kami</h2>
        </div>
            
        <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="box col-lg-5 mx-auto">
                        <img style="width:300px;height:auto" src="{{ asset('Template/images/1.png') }}" alt="">
                        <div class="detail-box">
                            <h5 style="color:#30A139;">
                                Siapa Kita?
                            </h5>
                            <p>
                            Tanahin adalah produk yang berfokus pada lahan yang dapat membantu masyarakat Indonesia dengan basis aplikasi website.                            </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="carousel-item">
                    <div class="box col-lg-5 mx-auto">
                        <img style="width:300px;height:auto"  src="{{ asset('Template/images/2.png') }}" alt="">
                        <div class="detail-box">
                            <h5 style="color:#30A139;">
                                Siapa itu Real Lander?
                            </h5>
                            <p>
                            Adalah tim kami yang berada di lokasi tanah dan bertugas untuk memastikan keaslian, keamanan dan kualitas tanah.                            </p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                    <div class="box col-lg-5 mx-auto">
                        <img style="width:300px;height:auto"  src="{{ asset('Template/images/3.png') }}" alt="">
                        <div class="detail-box">
                            <h5 style="color:#30A139;">
                                Siapa Itu Mo Servicer?
                            </h5>
                            <p>
                                Tim kami standby 24/7 untuk menjawab segala pertanyaan seputar informasi tanah yang ingin Anda beli.
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
                <br>
    <!-- OUR TEAM -->
        <div class="heading_container heading_center">
            <h2 style="color:#30A139;">
                Tanahin Team
            </h2>
            <!-- team baris 1 -->
            <div class="row text-center my-5">
                <div class="col-lg-4">
                    <a target="_blank" href="">
                        <img src="" width="200px" height="200px" class="rounded-circle">
                    </a>
                    <div class="text-center my-4">
                        <h4 style="font-size:20px;">Kanza Azzahra</h4>
                        <a class="btn" target="_blank" href=""><i class="fa fa-instagram"></i></a>
                        <a class="btn" target="_blank" href=""><i class="fa fa-linkedin-square"></i></a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <a target="_blank" href="">
                        <img src="" width="200px" height="200px" class="rounded-circle">
                    </a>
                    <div class="text-center my-4">
                        <h4 style="font-size:20px;">Mohammad Dwicahyo Brahim</h4>
                        <a class="btn" target="_blank" href=""><i class="fa fa-instagram"></i></a>
                        <a class="btn" target="_blank" href=""><i class="fa fa-linkedin-square"></i></a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <a target="_blank" href="">
                        <img src="" width="200px" height="200px" class="rounded-circle">
                    </a>
                    <div class="text-center my-4">
                        <h4 style="font-size:20px;">Muhammad Rizal Bimantoro</h4>
                        <a class="btn" target="_blank" href=""><i class="fa fa-instagram"></i></a>
                        <a class="btn" target="_blank" href=""><i class="fa fa-linkedin-square"></i></a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <a target="_blank" href="">
                        <img src="" width="200px" height="200px" class="rounded-circle">
                    </a>
                    <div class="text-center my-4">
                        <h4 style="font-size:20px;">Fitria Dewi Wulandari</h4>
                        <a class="btn" target="_blank" href=""><i class="fa fa-instagram"></i></a>
                        <a class="btn" target="_blank" href=""><i class="fa fa-linkedin-square"></i></a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <a target="_blank" href="">
                        <img src="" width="200px" height="200px" class="rounded-circle">
                    </a>
                    <div class="text-center my-4">
                        <h4 style="font-size:20px;">Edbert Salim</h4>
                        <a class="btn" target="_blank" href=""><i class="fa fa-instagram"></i></a>
                        <a class="btn" target="_blank" href=""><i class="fa fa-linkedin-square"></i></a>
                    </div>
                </div>
        </div>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('Template/images/contact.png') }}" class="d-block w-100" alt="...">
              </div>
            </div>
        </div>
        <h2 style="color:#30A139;">
            Dalam Pengawasan
        </h2>
        <img src="{{ asset('Template/images/pengawasan.png') }}" alt="...">
        <br><br>

</div>
</section>
      
@endsection