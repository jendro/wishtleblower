@extends('layouts.main')

@section('title', 'Login')

@section('content')

    <section class="service-area gray-bg ptb-30">
        <div class="container">
            <div class="row service-all white-bg">

                <div class="col-md-6">
                    <img style="max-width:90%" src="{{ asset('images/login.png') }}" alt="">
                </div>

                <div class="col-md-4 col-md-offset-2">
                    <h3>Mendaftar</h3>
                    <form method="POST" action="{{ route('register') }}" >
                        @csrf
                        <div class="form-group">
                            <label for="">Email</label>
                            <div>
                                <input type="email" class="form-control" name="email" id="email" placeholder="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <div>
                                <input type="text" class="form-control" name="username" id="username" placeholder="username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <div>
                                <input type="password" class="form-control" name="password" id="password" placeholder="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Konfirmasi Password</label>
                            <div>
                                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="konfirnasi password">
                            </div>
                        </div>
                        <div class="form-group">
                            <p>Sudah punya akun, silahkan login <a class="url-blue" href="{{ route('login') }}">disini</a></p>
                            <input type="submit" value="Daftar">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    
    <style>
    .url-blue{
        color:blue;
    }
    </style>

@endsection