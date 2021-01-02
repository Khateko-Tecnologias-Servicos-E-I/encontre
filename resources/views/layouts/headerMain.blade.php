<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" value="{{ csrf_token() }}"/>

    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Encontre - Tudo que procura! | Inicio</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/front-end/core-img/favicon.ico') }}">

    <!-- Core Stylesheet -->
    <link href="{{ asset('assets/css/front-end/style.css') }}" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="{{ asset('assets/css/front-end/responsive.css') }}" rel="stylesheet">

</head>

<body>
<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="mosh-preloader"></div>
</div>

<!-- ***** Header Area Start ***** -->
<header class="header_area">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <!-- Menu Area Start -->
            <div class="col-12 h-100">
                <div class="menu_area h-100">



{{--                    @yield('layouts.nav')--}}

                    <nav class="navbar h-100 navbar-expand-lg align-items-center">
                        <!-- Logo -->
                        <a class="navbar-brand" href="/"><img src="{{ asset('assets/img/front-end/core-img/logo.png') }}" alt="logo"></a>

                        <!-- Menu Area -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mosh-navbar" aria-controls="mosh-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                        <div class="collapse navbar-collapse justify-content-end" id="mosh-navbar">
                            <ul class="navbar-nav animated" id="nav">
                                <li class="nav-item active"><a class="nav-link" href="/">Início</a></li>
{{--                                <li class="nav-item dropdown">--}}
{{--                                    <a class="nav-link dropdown-toggle" href="#" id="moshDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>--}}
{{--                                    <div class="dropdown-menu" aria-labelledby="moshDropdown">--}}
{{--                                        <a class="dropdown-item" href="index.html">Home</a>--}}
{{--                                        <a class="dropdown-item" href="about.html">About Us</a>--}}
{{--                                        <a class="dropdown-item" href="services.html">Services</a>--}}
{{--                                        <a class="dropdown-item" href="portfolio.html">Portfolio</a>--}}
{{--                                        <a class="dropdown-item" href="blog.html">Blog</a>--}}
{{--                                        <a class="dropdown-item" href="contact.html">Contact</a>--}}
{{--                                        <div class="dropdown-divider"></div>--}}
{{--                                        <a class="dropdown-item" href="elements.html">Elements</a>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
                                <li class="nav-item"><a class="nav-link" href="/sobre">Sobre nós</a></li>
                                <li class="nav-item"><a class="nav-link" href="/perdidos">Perdidos</a></li>
                                <li class="nav-item"><a class="nav-link" href="/achados">Achados</a></li>
                                <li class="nav-item"><a class="nav-link" href="/apoio">Apoio</a></li>
                                <li class="nav-item"><a class="nav-link" href="/contactos">Contactos</a></li>
                            </ul>
                            <!-- Search Form Area Start -->
                            <div class="search-form-area animated">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Type keywords &amp; hit enter">
                                    <button type="submit" class="d-none"><img src="{{ asset('assets/img/front-end/core-img/search-icon.png') }}" alt="Search"></button>
                                </form>
                            </div>
                            <!-- Search btn -->
                            <div class="search-button">
                                <a href="#" id="search-btn"><img src="{{ asset('assets/img/front-end/core-img/search-icon.png') }}" alt="Search"></a>
                            </div>
                            <!-- Login/Register btn -->
                            <div class="login-register-btn">
                                <a href="/login">Entrar</a>
                                <a href="/register">/ Registo</a>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                >/ Sair
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                            </div>
                        </div>
                    </nav>


                </div>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
