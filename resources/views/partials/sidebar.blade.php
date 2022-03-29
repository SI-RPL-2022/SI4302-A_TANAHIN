<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
        <div class="logo">
            <a  class="simple-text logo-normal">
                <div class="logo-image-big">
                    <img src="{{asset('Template/images/logo.png')}}">
                </div>
            </a>
        </div>
        
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class= "@yield('home')">
                    <a href="/admin/home">
                        <i class="fa fa-home"></i>
                        <p>Beranda</p>
                    </a>
                </li>
                <li class= "@yield('transaksi')">
                    <a href="/admin/transaksi">
                        <i class="fa fa-exchange"></i>
                        <p>Transaksi</p>
                    </a>
                </li>

                <li class= "@yield('produk')">
                    <a href="/admin/produk">
                        <i class="fa fa-shopping-bag"></i>
                        <p>Produk</p>
                    </a>
                </li>
                <li class= "@yield('layanan')">
                    <a href="/admin/layanan">
                        <i class="fa fa-tasks"></i>
                        <p>Administrasi</p>
                    </a>
                </li>

                <li class= "@yield('dashboard')">
                    <a href="/admin/dashboard">
                        <i class="fa fa-line-chart"></i>
                        <p>Dashboard Tanah</p>
                    </a>
                </li>


                <li class= "@yield('logout')">
                    <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                               <i class="fa fa-sign-out"></i> {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                </li>
            </ul>
        </div>
    </div>

