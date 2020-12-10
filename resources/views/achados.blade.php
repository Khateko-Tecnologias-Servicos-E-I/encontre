@extends('layouts.base')

@section('content')

    <!-- ***** Breadcumb Area Start ***** -->
    <div class="mosh-breadcumb-area" style="background-image: url({{ asset('assets/img/front-end/core-img/breadcumb.png') }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumbContent">
                        <h2>Achados</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Início</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Todos os achados</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Portfolio Area Start ***** -->
    <section class="mosh-portfolio-area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mosh-projects-menu">
                        <div class="portfolio-menu">
                            <p class="active" data-filter="*">Todos</p>
                            <p data-filter=".gd">Categoria 1</p>
                            <p data-filter=".bi">Categoria 2</p>
                            <p data-filter=".pho">Categoria 3</p>
                            <p data-filter=".wd">Categoria 4</p>
                            <p data-filter=".pc">Categoria 5</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mosh-portfolio">
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item gd">
                <img src="{{ asset('assets/img/front-end/portfolio-img/1.jpg') }}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item bi">
                <img src="{{ asset('assets/img/front-end/portfolio-img/2.jpg') }}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item gd bi">
                <img src="{{ asset('assets/img/front-end/portfolio-img/3.jpg') }}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item pho">
                <img src="{{ asset('assets/img/front-end/portfolio-img/4.jpg') }}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item pho">
                <img src="{{ asset('assets/img/front-end/portfolio-img/5.jpg') }}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item wd pc">
                <img src="{{ asset('assets/img/front-end/portfolio-img/6.jpg') }}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item wd">
                <img src="{{ asset('assets/img/front-end/portfolio-img/7.jpg') }}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item pc">
                <img src="{{ asset('assets/img/front-end/portfolio-img/8.jpg') }}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item pc">
                <img src="{{ asset('assets/img/front-end/portfolio-img/9.jpg') }}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item pc">
                <img src="{{ asset('assets/img/front-end/portfolio-img/10.jpg') }}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item pc">
                <img src="{{ asset('assets/img/front-end/portfolio-img/11.jpg') }}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item pc">
                <img src="{{ asset('assets/img/front-end/portfolio-img/12.jpg') }}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Discover More btn -->
        <div class="col-12 text-center mt-100">
            <a href="#" class="btn mosh-btn">Ver mais</a>
        </div>
    </section>
    <!-- ***** Portfolio Area End ***** -->

@endsection
