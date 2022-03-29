@extends('master')
@section('register')
active
@endsection
@section('content') 

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="{{ asset('Template/images/favicon.png') }}" type="">
        <title>Login</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="{{asset('Template/css/style2.css')}}">

        </head>
        <body>
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-10">
                        <div class="wrap d-md-flex">
                            <div class="img" style="background-image:url({{asset('Template/images/land.jpg')}});">
                    </div>
                            <div class="login-wrap p-4 p-md-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 style="color:#30A139;" class="mb-4"><b>Register</b></h3>
                            </div>
                        </div>


                        <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group mb-3">
                                <label class="name" for="name">{{ __('Nama') }}</label>
                                <input id="name" type="text" placeholder="Nama" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group mb-3">
                                <label class="email" for="email">{{ __('Email Address') }}</label>
                                <input id="email" type="email" placeholder="E-Mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="form-group mb-3">
                                <label class="no_hp" for="no_hp">{{ __('Nomor Handphone') }}</label>
                                <div class="row">
                                    <div class="col-2">
                                        <button class="btn btn-primary ">+62</button>
                                    </div>
                                    <div class="col-10">
                                        <input id="no_hp" type="text" placeholder="Nomor Handphone" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" required autocomplete="no_hp">
                                    </div>
                                </div>
                                   
                                    

                                
                                
                                @error('no_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="password" for="password">{{ __('Password') }}</label>
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <input type="hidden" value="0" name="is_admin">

                            <div class="form-group mb-3">
                                <label class="password-confirm" for="password-confirm">{{ __('Konfirmasi Password') }}</label>
                                <input id="password-confirm" placeholder="Konfirmasi Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary rounded submit px-3">{{ __('Register') }}</button>
                        </div>
                        
                        <div class="form-group d-md-flex">
                            <div class="w-50 text-left">
                                <label class="checkbox-wrap checkbox-primary mb-0">{{ __('Remember Me') }}
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <span class="checkmark"></span>
                                            </label>
                                        </div>
                        </div>
                    </form>
                    <p class="text-center">Sudah punya akun? <a href="/login">Login</a></p>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </section>
        <br><br>

        <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

        </body>
    </html>

    @endsection