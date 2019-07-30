<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Wishtleblower || @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/core.css') }}">
    <link rel="stylesheet" href="{{ asset('css/shortcode/shortcodes.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/color/color-1.css') }}">
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
    
</head>

<body>
    
    <div class="wrapper">
        
        <header class="header-area">
            <div class="header-top navy-bg ptb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="header-top-info">
                                @include('layouts.header.top-left')
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 hidden-xs">
                            <div class="header-top-right f-right">
                                @include('layouts.header.top-right')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom stick-h2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('images/logo/logo.png') }}" alt=""> 
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 hidden-sm hidden-xs">
                            <div class="menu-area f-right">
                                @include('layouts.header.navigation')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        @include('layouts.header.mobile-navigation')
        
        @yield('content')

        <footer class="footer-area">
            <div class="footer-top ptb-110 navy-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="footer-logo-address">
                                <div class="footer-logo">
                                    <a href="#"><img src="{{ asset('images/logo/logo.png') }}" alt="" ></a>
                                </div>
                                <br>
                                <div class="footer-address">
                                    <div class="header-top-info">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="icofont icofont-ui-call"></i>
                                                    Telpon  (+123) 45 67 89 21
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icofont icofont-envelope"></i>
                                                    whistleblower@whis.com
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icofont icofont-location-pin"></i>
                                                    Dev Items address goes here.
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="footer-text">
                                <h3>Info</h3>
                                <ul class="footer-text-all">
                                    <li><a href="#">Undang-Undang Tentang Whistleblower</a></li>
                                    <li><a href="#">Undang-Undang Tentang Korupsi </a></li>
                                    <li><a href="#">Undang-Undang Tentang Perlindungan Saksi</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="footer-text mrg-xs">
                                <h3>URL</h3>
                                <ul class="footer-text-all">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Tentang Whistleblower</a></li>
                                    <li><a href="#">Laporkan</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="footer-text mrg-sm3 mrg-xs">
                                
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="footer-text mrg-sm3 mrg-xs">
                               <h3>Hubungi Kami</h3>
                               <form action="#">
                                    <input placeholder="Nama*" type="text">
                                    <input class="in-mrg" placeholder="Email*" type="email">
                                    <textarea placeholder="Pesan*"></textarea>
                                    <button class="submit" type="submit">send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        <div id="toTop">
            <i class="fa fa-chevron-up"></i>
        </div>

    </div>

    <script src="{{ asset('js/vendor/jquery-1.12.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/ajax-mail.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>