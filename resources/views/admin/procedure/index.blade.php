@extends('layouts.adminLayout')
@section('procedure')
    active
@endsection
@section('konten')
    <div class="container">
        <h3 align="center" style="color:#616161" class="mt-5 fw-bolder">List Procedure</h3> <br>
        <hr>

        @if (session('success'))
            <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger border-left-danger" role="alert">
                <ul class="pl-4 my-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="content mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">

                        </div>

                        <div class="card-body">
                            <div class="table">
                                <a href="{{ route('procedure.create') }}"
                                    style="background-color:#0FA958; width:100px; color:white;" type="button"
                                    class="fw-bold btn mb-4">Tambah</a>

                                <table class="table table-bordered data-table">
                                    <thead>
                                        <tr>
                                            <th>Photo</th>
                                            <th>Title</th>
                                            <th width="100px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($procedures as $procedure)
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('uploads/' . $procedure->image_path) }}"
                                                        alt="{{ $procedure->title }}" width="100px" height="100px">
                                                </td>
                                                <td>{{ $procedure->title }}</td>
                                                <td>
                                                    <a href="{{ route('procedure.edit', $procedure->id) }}"
                                                        class="btn btn-info btn-sm">Edit</a>
                                                    <form action="{{ route('procedure.destroy', $procedure->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
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
