<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('/template/css/bootstrap.min.css')}}">
        <!-- Google Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> -->
        <!-- Simple line Icon -->
        <link rel="stylesheet" href="{{asset('/template/css/simple-line-icons.css')}}">
        <!-- Themify Icon -->
        <link rel="stylesheet" href="{{asset('/template/css/themify-icons.css')}}">
        <!-- Hover Effects -->
        <link rel="stylesheet" href="{{asset('/template/css/set1.css')}}">
        <!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('/template/css/style.css')}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                /* overflow-y:hidden; */
            }
        </style>
    </head>
    <body>
        <div class="nav-menu">
            <div class="bg transition">
                <div class="container-fluid fixed">
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <a class="navbar-brand" href="index.html">TanyaAja</a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-menu"></span>
                                </button>
                                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                                    <ul class="navbar-nav form-inline">
                                        <!-- <li class="nav-item dropdown">
                                            <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Explore
                                                <span class="icon-arrow-down"></span>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Listing
                                                <span class="icon-arrow-down"></span>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Pages
                                                <span class="icon-arrow-down"></span>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </li> -->
                                        <!-- <li class="nav-item nav-home">
                                            <a class="nav-link" href="#">Masuk</a>
                                        </li>
                                        <li class="nav-item nav-home">
                                            <a class="nav-link" href="#">Daftar</a>
                                        </li> -->
                                        @if (Route::has('login'))
                                            <div class="top-right links">
                                                @auth
                                                    <a href="{{ url('/home') }}">Home</a>
                                                @else
                                                    <a href="{{ route('login') }}">Login</a>

                                                    @if (Route::has('register'))
                                                        <a href="{{ route('register') }}">Register</a>
                                                    @endif
                                                @endauth
                                            </div>
                                        @endif
                                        <!-- <li><a href="#" class="btn btn-outline-light top-btn"><span class="ti-plus"></span> Add Listing</a></li> -->
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SLIDER -->
        <section class="slider d-flex align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center">                        <div class="col-md-12">
                        <div class="slider-title_box">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slider-content_wrap">
                                            <h1>Bingung?</h1>
                                        <h5>Cari jawaban anda di TanyaAja</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-10">
                                    <form class="form-wrap mt-4">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <input type="text" placeholder=" Cari permasalahan anda" class="btn-group">                                               
                                            <button type="submit" class="btn-form"><span class="icon-magnifier search-icon"></span>CARI<i class="pe-7s-angle-right"></i></button>
                                        </div>
                                    </form>
                                    <div class="slider-link">
                                        <a href="{{ route('pertanyaan.index') }}">Cari Populer</a><span>atau</span> <a href="{{ route('pertanyaan.index') }}">Baru Ditambahkan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// SLIDER -->
        <!--============================= FOOTER =============================-->
        <footer class="main-block dark-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <p>Copyright &copy; 2018 Listing. All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <ul>
                                <li><a href="#"><span class="ti-facebook"></span></a></li>
                                <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                                <li><a href="#"><span class="ti-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--//END FOOTER -->

        <!-- jQuery, Bootstrap JS. -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{asset('/template/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('/template/js/popper.min.js')}}"></script>
        <script src="{{asset('/template/js/bootstrap.min.js')}}"></script>

        <script>
            $(window).scroll(function() {
                // 100 = The point you would like to fade the nav in.

                if ($(window).scrollTop() > 100) {

                    $('.fixed').addClass('is-sticky');

                } else {

                    $('.fixed').removeClass('is-sticky');

                };
            });
        </script>
    </body>
</html>
