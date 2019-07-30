@extends('layouts.main')

@section('title', 'Home')

@section('content')


    <div class="slider-area">
        <div class="text-animation-1">
            <div class="slider-all">
                <img src="images/slider/1.jpg" alt="">
                <div class="slider-text-wrapper">
                    <div class="table">
                        <div class="table-cell">
                            <div class="slider-text">
                                <h1 class="tlt1">Lapor Korupsi</h1>
                                <p class="">laporkan perbuatan yang terkait dengan tindak pidana korupsi<br>yang diataur dalam undang-undang No. 20 Tahun 2001 mengenai Pemberantasan Tindak Pidana Korupsi</p>
                                <a class="button extra-small mb-20" href="#">
                                    <span>Lapor Sekarang</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="service-area gray-bg ptb-110">
        <!-- Demo Section    -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="service-all white-bg">
                        <h2>Definisi Kategori Laporan</h2>
                        
                        @foreach($jenis_laporan_r as $data_laporan)
                            <div class="row">
                                @foreach($data_laporan as $jenis_laporan)
                                    <div class="col-md-6 col-sm-6">
                                        <div class="service-left">
                                            <div class="offer-icon">
                                                <i class="icofont {{ $jenis_laporan->icon }}"></i>
                                            </div>
                                            <div class="offer-text">
                                                <h3>{{ $jenis_laporan->jenis_laporan }}</h3>
                                                <p>{!! nl2br($jenis_laporan->keterangan) !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <br>
                            <br>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="counter-area bg-2 bg-opacity bg-relative ptb-110">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 text-center">
                    <div class="counter-bottom2">
                        <div class="counter-img">
                            <i class="icofont icofont-file-document"></i>
                        </div>
                        <div class="counter-all">
                            <div class="counter-next2">
                                <h2>Masuk</h2>
                            </div>
                            <div class="counter cnt-two">
                                <h1>0</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3  text-center">
                    <div class="counter-bottom2 mrg-xs">
                        <div class="counter-img">
                            <i class="icofont icofont-gears"></i>
                        </div>
                        <div class="counter-all">
                            <div class="counter-next2">
                                <h2>Ditanggapi</h2>
                            </div>
                            <div class="counter cnt-two">
                                <h1>0</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3  text-center">
                    <div class="counter-bottom2 mrg-xs">
                        <div class="counter-img">
                            <img src="images/icons/3.png" alt="" >
                        </div>
                        <div class="counter-all">
                            <div class="counter-next2">
                                <h2>Terbukti</h2>
                            </div>
                            <div class="counter cnt-two">
                                <h1>0</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3  text-center">
                    <div class="counter-bottom2 mrg-xs">
                        <div class="counter-img">
                            <i class="icofont icofont-check-circled"></i>
                        </div>
                        <div class="counter-all">
                            <div class="counter-next2">
                                <h2>Selesai</h2>
                            </div>
                            <div class="counter cnt-two">
                                <h1>0</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="testimonial-area ptb-110">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="testimonial-text">
                        <h2>Tanggapan Masyarakat</h2>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="slider-active2">
                        <div class="testimonial-all">
                            <div class="testimonial-peragraph">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididu nt ut la et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla mlaboris nisi ut aliquip ex ea commodo conseq
                                </p>
                            </div>
                            <div class="testimonial-img">
                                <img alt="" src="images/banner/2.jpg" >
                                <div class="img-title navy-bg">
                                    <h3>Eko Wardoyo</h3>
                                    <p>Swasta</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-all">
                            <div class="testimonial-peragraph">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididu nt ut la et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla mlaboris nisi ut aliquip ex ea commodo conseq</p>
                            </div>
                            <div class="testimonial-img">
                                <img alt="" src="images/banner/2.jpg" >
                                <div class="img-title navy-bg">
                                    <h3>Maimun Jumadi</h3>
                                    <p>PNS</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-all">
                            <div class="testimonial-peragraph">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut la et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamlaboris nisi ut aliquip ex ea commodo conseq</p>
                            </div>
                            <div class="testimonial-img">
                                <img alt="" src="images/banner/2.jpg" >
                                <div class="img-title navy-bg">
                                    <h3>Rosyidin</h3>
                                    <p>Kepala Sekolah</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .counter-img i{
            font-size:5em;
            color:white;
        }
    </style>
@endsection