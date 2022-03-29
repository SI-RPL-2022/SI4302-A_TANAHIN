<nav class="navbar navbar-expand-lg custom_nav-container ">
    <a class="navbar-brand" href="/"><img width="150" src="{{ asset('Template/images/logo.png') }}" alt="#" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class=""> </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav">
          <li class="nav-item @yield('beranda')">
             <a class="nav-link" href="/">Beranda </a>
          </li>
        
          <li class="nav-item @yield('produk')">
             <a class="nav-link" href="/produk">E-Commerce</a>
          </li>

          <li class="nav-item @yield('layanan') dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Administrasi <span class="caret"></span></a>
            <ul class="dropdown-menu">
               <li><a style="text-decoration:none;" href="/layanan/jualtanah"><i class="fa fa-money" aria-hidden="true"></i>&nbsp;Jual Tanah</a></li>
               <li><a style="text-decoration:none;" href="/layanan/buatsertif"><i class="fa fa-file-text" aria-hidden="true"></i>&nbsp;Buat Sertifikat</a></li>
               <li><a style="text-decoration:none;"href="/layanan/gantipemilik"><i class="fa fa-book" aria-hidden="true"></i>&nbsp;BBN Tanah</a></li>
            </ul>
         </li>

          <li class="nav-item  @yield('tentang') dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Tentang <span class="caret"></span></a>
            <ul class="dropdown-menu">
               <li><a style="text-decoration:none;" href="/tentang/tentangkami"><i class="fa fa-question" aria-hidden="true"></i>&nbsp;Tentang Kami</a></li>
               <li><a style="text-decoration:none;" href="/tentang/prosedur"><i class="fa fa-file" aria-hidden="true"></i>&nbsp;Prosedur</a></li>
            </ul>
         </li>

          @guest
                    @if (Route::has('login'))
                        <li class="nav-item @yield('login')">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item @yield('register')">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
         <li class="nav-item @yield('profil') dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label"><i class="fa fa-user" aria-hidden="true"></i> <span class="caret"></span></a>
            
            <ul class="dropdown-menu">
               <li><a style="text-decoration:none;" href="/profil"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Profil Pengguna</a></li>
               <li><a style="text-decoration:none;" href="/profil/dashboard"><i class="fa fa-line-chart" aria-hidden="true"></i>&nbsp;Dashboard Tanah</a></li>
               <li><a style="text-decoration:none;" href="/profil/riwayat"><i class="fa fa-exchange" aria-hidden="true"></i>&nbsp;Transaksi</a></li>
               <li><a style="text-decoration:none;" href="/profil/pengajuan"><i class="fa fa-history" aria-hidden="true"></i>&nbsp;Pengajuan</a></li>
               
               <li>
               <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                   <i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Logout
               </a>
            
               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
            </li>
               
            </ul>
         </li>
         @endguest

       </ul>
    </div>
 </nav>