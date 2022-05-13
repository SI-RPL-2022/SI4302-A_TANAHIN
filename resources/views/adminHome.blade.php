@extends('layouts.adminLayout')
@section ('home')
active
@endsection
@section('konten')
<div class="container">
<h3 align="center" class="mt-5">Rangkuman Penjualan</h3> <br>
<hr>
    <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                    <div class="col">
                        <div class="numbers">
                            <h5 align="center">Transaksi Berhasil</h5>
                            <p class="text-success" align="center"> <b>45</b></p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                    <div class="col">
                        <div class="numbers">
                            <h5 align="center">Transaksi Gagal</h5>
                            <p align="center" class="text-danger"> <b>10</b> </p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                    <div class="col">
                        <div class="numbers">
                        <h5 align="center">Transaksi Berjalan</h5>
                        <p align="center" class="text-primary"> <b>75</b> </p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                    <div class="col">
                        <div class="numbers">
                            <h5 align="center">Omset</h5>
                            <p align="center" class="text-success"> <b>Rp.1.000.000.000</b> </p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                </div>
                </div>
            </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"> Detail Transaksi Berhasil</h4>
            </div>
            <div class="card-body">
              <div class="table">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      NO
                    </th>
                    <th>
                      ID Transaksi
                    </th>
                    <th>
                      Alamat Tanah
                    </th>
                    <th>
                      Pembeli
                    </th>
                    <th>
                      Omset
                    </th>
                    <th >
                      Aksi
                    </th>
                  </thead>
                  <tbody>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
  
</div>

@endsection




