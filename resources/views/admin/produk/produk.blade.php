@extends('layouts.adminLayout')
@section ('produk')
active
@endsection
@section('konten')

<div class="container">
<h3 align="center" style="color:#616161" class="mt-5 fw-bolder">List Produk</h3> <br>
<hr>

<div class="content mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                </div>

                <div class="card-body">
                    <div class="table">
                    <a href="/admin/produk/tambah" style="background-color:#0FA958; width:100px; color:white;" type="button" class="fw-bold btn ml-2">Tambah</a>
                    
                    <table class="table mt-3">
                        <thead class=" text-primary">
                        <th class="text-left" style="width:50px; color:black;">
                            No
                        </th>
                        <th class="text-left" style="width:150px; color:black;">
                            Id Tanah
                        </th>
                        <th class="text-left" style="width:250px; color:black;">
                            Pemilik/Penjual
                        </th>
                        <th class="text-left" style="width:200px; color:black;">
                            Harga/m<sup>2</sup>
                        </th>
                        <th class="text-left" style="width:450px; color:black;">
                            Alamat
                        </th>
                        <th class="text-left" style="width:300px; color:black;">
                            Aksi
                        </th>
                        </thead>

                        <tbody>
                        <?php $i=1; ?>
                        @foreach($produk as $data)
                        <tr>
                            <td >
                            {{$i++}}
                            </td>
                            <td>
                                {{$data->kode_tanah}}
                            </td>
                            <td>
                                {{$data->user->name}}
                            </td>
                            <td>
                                Rp {{number_format($data->harga*$data->luas)}}
                            </td>
                            <td>
                                {{$data->alamat}}
                            </td>
                            <td>
                                <a href="/admin/produk/edit/{{$data->kode_tanah}}" class="fw-bold btn mr-3" style="background-color:#F6CE4B; color:white; width:100px;" >Edit</a>
                                <a href="/admin/produk/delete/{{$data->id}}"  class="fw-bold btn " style="border-color:#F74C4C; color:#F74C4C; width:100px;" >Delete</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
            </div>
            </div>
        </div>

@endsection