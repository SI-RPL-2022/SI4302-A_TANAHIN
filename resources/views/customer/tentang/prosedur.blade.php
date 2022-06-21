@extends('master')
@section('tentang')
    active
@endsection
@section('content')
    <div class="heading_container heading_center">
        <h2 class="font-weight-bold text-center" style="color:#30A139;">Prosedur</h2>
    </div>

    <div class="container">
        <?php $i = 0; ?>
        @foreach ($procedures as $procedure)
            @if ($i % 2 == 1)
                <div class="row ">
                    <div class="col-lg-5 mb-3 ml-5">
                        <img style="width:350px;height:auto" src="{{ asset('uploads/' . $procedure->image_path) }}"
                            alt="{{ $procedure->title }}">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <br>
                        <br>
                        <h2 class="my-3">{{ $procedure->title }}</h2>
                        <p>{!! htmlspecialchars_decode(htmlspecialchars($procedure->description)) !!}</p>
                    </div>
                </div>
            @else
                <div class="row ">
                    <div class="col-lg-6 mb-3 mr-5">
                        <h2 class="my-3">{{ $procedure->title }}</h2>
                        <p>{!! htmlspecialchars_decode(htmlspecialchars($procedure->description)) !!}</p>
                    </div>
                    <div class="col-lg-5 mb-3 ml-5">
                        <img style="width:350px;height:auto" src="{{ asset('uploads/' . $procedure->image_path) }}"
                            alt="{{ $procedure->title }}">
                    </div>
                </div>
            @endif
            <?php $i++; ?>
        @endforeach
    @endsection
