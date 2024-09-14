@extends('layouts.layout2')

@php

    $bodyClass='index-five';

@endphp

@section('content')

 <!-- tpm-header-area start -->
    <!-- tpm-header-area start -->
    <header class="tmp-header-area-start header-two header-four header-five header--sticky">
        <!-- header-top start -->
        <div class="header-top-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-inner">
                            <div class="left-information-area">
                                <p class="left-top"><a href="tel:+553599974660"><i class="fa-regular fa-phone"></i> +55 (35) 99974660</a></p>
                                <div class="location-area">
                                    <i class="fa-light fa-location-dot"></i>
                                    <a href="#">Lavras, Minas Gerais</a>
                                </div>
                                <div class="working-time">
                                    <i class="fa-light fa-clock"></i>
                                    <p>Horários: 9:00 AM – 8:00 PM</p>
                                </div>
                            </div>
                            <div class="right-header-top">
                                <div class="social-area-transparent">
                                    <span>Rede Sociais</span>
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-top end -->
        <!-- header mid area start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-mida-area style-two ">
                        <div class="logo-area-start">
                            <a href="{{ route('index') }}">
                                <img style="width: 108px; height: 55px;" src="{{ asset('assets/images/logo/logo.png') }}" alt="logo"></a>
                        </div>

                        <div class="header-nav main-nav-one">
                        <x-menuList/>
                        </div>
                        <!-- <a href="#" class="tmp-btn btn-primary">Consultoria</a> -->
                        <div class="actions-area">

                            <a href="{{ route('service') }}" class="tmp-btn btn-primary">Comece agora</a>
                            <!-- <div class="menu-button" id="search">
                        <i class="fa-light fa-grid-2"></i>
                        </div> -->
                            <div class="tmp-side-collups-area" id="side-collups">
                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="14" width="20" height="2" fill="#fff"></rect>
                                    <rect y="7" width="20" height="2" fill="#fff"></rect>
                                    <rect width="20" height="2" fill="#fff"></rect>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header mid area end -->

    </header>
    <!-- tpm-header-area end -->

    <x-sidebar/>
    <!-- tpm-header-area end -->


    <!-- start startup banner swiper main wrapper -->
    <div class="startup-banner-swiper-wrapper construction-banner-top-wrapper">
        <div class="swiper swiper-startup-banner-construction">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <!-- tmp banner area start -->
                    <div class="tmp-banner-area banner-style-five inconstruction tmp-section-gap banner-bg-construction bg_image">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-startup-main-content-wrapper">
                                        <h1 class="title">Moldando seu <br> Cenário pro Futuro</h1>
                                        <p class="disc">
                                            Conectando Soluções Logísticas com Tecnologia de Ponta. Conheça nossas soluções inovadoras para mobilidade urbana, transporte rodoviário e serviços de guincho.
                                        </p>
                                        <a href="#" class="tmp-btn btn-primary">Falar com especialista</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shape-image">
                            <img src="{{ asset('assets/images/banner/shape/shape-04.png') }}" alt="shape">
                        </div>
                    </div>
                    <!-- tmp banner area end -->
                </div>
                <div class="swiper-slide">
                    <!-- tmp banner area start -->
                    <div class="tmp-banner-area banner-style-five inconstruction tmp-section-gap banner-bg-construction bg-two bg_image">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-startup-main-content-wrapper">
                                        <h1 class="title">Desenvolvendo seu <br> Ambiente ideal</h1>
                                        <p class="disc">
                                            Conectando Soluções Logísticas com Tecnologia de Ponta. Conheça nossas soluções inovadoras para mobilidade urbana, transporte rodoviário e serviços de guincho.
                                        </p>
                                        <a href="#" class="tmp-btn btn-primary">Fale com um especialista</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shape-image">
                            <img src="{{ asset('assets/images/banner/shape/shape-04.png') }}" alt="shape">
                        </div>
                    </div>
                    <!-- tmp banner area end -->
                </div>
                <div class="swiper-slide">
                    <!-- tmp banner area start -->
                    <div class="tmp-banner-area banner-style-five inconstruction tmp-section-gap banner-bg-construction bg-three bg_image">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-startup-main-content-wrapper">
                                        <h1 class="title">Criando seu <br> Destaque no Mercado </h1>
                                        <p class="disc">
                                            Conectando Soluções Logísticas com Tecnologia de Ponta. Conheça nossas soluções inovadoras para mobilidade urbana, transporte rodoviário e serviços de guincho.
                                        </p>
                                        <a href="#" class="tmp-btn btn-primary">Fale com um especialista</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shape-image">
                            <img src="{{ asset('assets/images/banner/shape/shape-04.png') }}" alt="shape">
                        </div>
                    </div>
                    <!-- tmp banner area end -->
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next" data-tmp-cursor="md transparent fw-bold" data-tmp-cursor-text="Próximo"></div>
            <div class="swiper-button-prev" data-tmp-cursor="md transparent fw-bold" data-tmp-cursor-text="Anterior"></div>
        </div>
    </div>
    <!-- start startup banner swiper main wrapper end -->

    <!-- Tpm About Area Start  -->
    <div class="about-area tmp-section-gap about-style-one">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-thumbnails">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/about/8.png') }}" alt="corporate_business">

                            <div class="image-two">
                                <img src="{{ asset('assets/images/about/03.png') }}" alt="corporate_business">
                            </div>

                            <div class="image-three animated">
                                <img class="" src="{{ asset('assets/images/about/02.png') }}" alt="corporate_business">
                            </div>

                            <div class="square"></div>

                            <div class="flower">
                                <img src="{{ asset('assets/images/about/flower.png') }}" alt="Corporate_Business">
                            </div>

                            <div class="product-share">
                                <div class="rating">
                                    <div class="number">4.8</div>
                                    <div class="stars-group">
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>

                                            <i class="fa-solid fa-star-half-stroke"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-share">
                                    <a href="#" class="avatar" data-tooltip="Mark JOrdan" tabindex="0"><img src="{{ asset('assets/images/about/4.png') }}" alt="Business_Corporate"></a>

                                    <a href="#" class="avatar" data-tooltip="Mark JOrdan" tabindex="0"><img src="{{ asset('assets/images/about/5.png') }}" alt="Business_Corporate"></a>

                                    <a href="#" class="avatar" data-tooltip="Mark JOrdan" tabindex="0"><img src="{{ asset('assets/images/about/6.png') }}" alt="Business_Corporate"></a>

                                    <a href="#" class="avatar" data-tooltip="Mark JOrdan" tabindex="0"><img src="{{ asset('assets/images/about/7.png') }}" alt="Business_Corporate"></a>


                                </div>
                            </div>
                        </div>

                        <!-- video icon -->
                        <div class="vedio-icone" data-tmp-cursor="lg" data-tmp-cursor-text="Reproduzir Video">
                            <a class="video-play-button play-video" href="#">
                                <span></span>
                            </a>
                            <div class="video-overlay">
                                <a class="video-overlay-close">×</a>
                            </div>
                        </div>
                        <!-- video icon -->

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-inner">
                        <div class="section-head text-align-left section-head-one-side">
                            <div class="section-sub-title">
                                <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Corporate_service" style="filter: grayscale(100%) brightness(0%);">
                                <span class="subtitle">SOBRE NÓS</span>
                            </div>
                            <h2 class="title split-collab">Saiba mais sobre nossos <br> serviços</h2>
                        </div>

                        <p class="description" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget ornare quam. Sed sit amet sem sollicitudin, condimentum diam sed, consequat tellus. Quisque ac odio eget ligula gravida efficitur. Nunc facilisis sagittis magna, non venenatis mauris luctus quis.
                        </p>
                        <!-- Prograss bar Start  -->
                        <div class="single-progress-area progress-stye-one" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                            <div class="progress-top">
                                <p class="name">TKX Mobilidade Inteligente</p>
                                <span class="parcent">
                                    85%
                                </span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="single-progress-area progress-stye-one" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                            <div class="progress-top">
                                <p class="name">TKX Truck</p>
                                <span class="parcent">
                                    86%
                                </span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 86%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="single-progress-area progress-stye-one" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                            <div class="progress-top">
                                <p class="name">TKX Guincho</p>
                                <span class="parcent">
                                    66%
                                </span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 66%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!-- Prograss bar End  -->
                        <div class="thumbnail-with-title" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                            <div class="thumbnail">
                                <img src="{{ asset('assets/images/about/about-with-icon.png') }}" alt="" style="filter: grayscale(100%) brightness(0%);">
                                <div class="icon">
                                    <i class="fa-regular fa-dollar-sign"></i>
                                </div>
                            </div>
                            <div class="title">Ajudando você a administrar um negócio mais eficiente & lucrativo.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Tpm About Area End  -->

    <div class="service-area tmp-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Business_Consulting_services" style="filter: grayscale(100%) brightness(0%);">
                            <span>NOSSOS SERVIÇOS</span>
                        </div>
                        <h2 class="title split-collab">Nossas Soluções Inovadoras</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-inner financial-service-inner agency-service">
                        <div class="icon">
                            <img src="{{ asset('assets/images/services/agency-6.svg') }}" alt="corporate_Business_Services_agency" style="filter: grayscale(100%) brightness(0%);">
                        </div>
                        <div class="content">
                            <h2 class="title">TKX Mobilidade Inteligente:</h2>
                            <p class="description">
                                Nosso aplicativo de mobilidade urbana oferece uma maneira rápida e segura para motoristas e passageiros se conectarem. Com uma interface intuitiva e recursos avançados, garantimos uma experiência de viagem eficiente e confiável.
                            </p>
                            <div class="three--dot">
                                <div class="dot dot-one"></div>
                                <div class="dot dot-two"></div>
                                <div class="dot dot-two"></div>
                            </div>
                        </div>
                        <a href="{{ route('service-details') }}" class="over_link"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-inner financial-service-inner agency-service">
                        <div class="icon">
                            <img src="{{ asset('assets/images/services/agency-1.svg') }}" alt="corporate_Business_Services_agency" >

                        </div>
                        <div class="content">
                            <h2 class="title">TKX Truck</h2>
                            <p class="description">
                                A TKX Truck é a solução definitiva para a logística rodoviária. Nossa plataforma conecta empresas que precisam de transporte com motoristas e transportadoras, proporcionando um acompanhamento completo e otimização de rotas..
                            </p>
                            <div class="three--dot">
                                <div class="dot dot-one"></div>
                                <div class="dot dot-two"></div>
                                <div class="dot dot-two"></div>
                            </div>
                        </div>
                        <a href="{{ route('service-details') }}" class="over_link"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-inner financial-service-inner agency-service">
                        <div class="icon">
                            <img src="{{ asset('assets/images/services/agency-7.svg') }}" alt="corporate_Business_Services_agency" style="filter: grayscale(100%) brightness(0%);">
                        </div>
                        <div class="content">
                            <h2 class="title">TKX Guincho</h2>
                            <p class="description">
                                Com o TKX Guincho, seguradoras podem encontrar rapidamente os guincheiros mais próximos para atender às necessidades dos clientes com eficiência e rapidez.
                            </p>
                            <div class="three--dot">
                                <div class="dot dot-one"></div>
                                <div class="dot dot-two"></div>
                                <div class="dot dot-two"></div>
                            </div>
                        </div>
                        <a href="{{ route('service-details') }}" class="over_link"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- tmp product area start -->
    <div class="tmp-product-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Corporate_service" style="filter: grayscale(100%) brightness(0%);">
                            <span class="subtitle">NOSSOS CASES</span>
                        </div>
                        <h2 class="title split-collab">Veja nossos melhores exemplos </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-full">
            <div class="row">
                <div class="col-lg-12">
                    <!-- product swiper area start -->
                    <div class="product-swiper-area-one">

                        <div class="swiper mySwiper-portfolio-1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- single product area start -->
                                    <div class="signle-product-start" data-tmp-cursor="lg text-secondary transparent fw-bold" data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                        <a href="{{ route('projects-details') }}" class="thumbnail">
                                            <img src="{{ asset('assets/images/portfolio/portfolio-7.png') }}" alt="corporate_business">
                                        </a>
                                        <div class="inner-content">
                                            <a href="{{ route('projects-details') }}">
                                                <h5 class="title">Aumento de Frotas</h5>
                                            </a>
                                            <span class="designation">TKX Mobilidade inteligente</span>
                                            <div class="tag"></div>
                                        </div>
                                    </div>
                                    <!-- single product area end -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- single product area start -->
                                    <div class="signle-product-start" data-tmp-cursor="lg text-secondary transparent fw-bold" data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                        <a href="{{ route('projects-details') }}" class="thumbnail">
                                            <img src="{{ asset('assets/images/portfolio/portfolio-8.png') }}" alt="corporate_business">
                                        </a>
                                        <div class="inner-content">
                                            <a href="{{ route('projects-details') }}">
                                                <h5 class="title">Redesenho de Aplicativo</h5>
                                            </a>
                                            <span class="designation">TKX Truck</span>
                                            <div class="tag"></div>
                                        </div>
                                    </div>
                                    <!-- single product area end -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- single product area start -->
                                    <div class="signle-product-start" data-tmp-cursor="lg text-secondary transparent fw-bold" data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                        <a href="{{ route('projects-details') }}" class="thumbnail">
                                            <img src="{{ asset('assets/images/portfolio/portfolio-9.png') }}" alt="corporate_business">
                                        </a>
                                        <div class="inner-content">
                                            <a href="{{ route('projects-details') }}">
                                                <h5 class="title">Criação de Tracking</h5>
                                            </a>
                                            <span class="designation">TKX truck</span>
                                            <div class="tag"></div>
                                        </div>
                                    </div>
                                    <!-- single product area end -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- single product area start -->
                                    <div class="signle-product-start" data-tmp-cursor="lg text-secondary transparent fw-bold" data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                        <a href="{{ route('projects-details') }}" class="thumbnail">
                                            <img src="{{ asset('assets/images/portfolio/portfolio-10.png') }}" alt="corporate_business">
                                        </a>
                                        <div class="inner-content">
                                            <a href="{{ route('projects-details') }}">
                                                <h5 class="title">Guinchos 24hrs</h5>
                                            </a>
                                            <span class="designation">TKX Guincho</span>
                                            <div class="tag"></div>
                                        </div>
                                    </div>
                                    <!-- single product area end -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- single product area start -->
                                    <div class="signle-product-start" data-tmp-cursor="lg text-secondary transparent fw-bold" data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                        <a href="{{ route('projects-details') }}" class="thumbnail">
                                            <img src="{{ asset('assets/images/portfolio/portfolio-11.png') }}" alt="corporate_business">
                                        </a>
                                        <div class="inner-content">
                                            <a href="{{ route('projects-details') }}">
                                                <h5 class="title">TKX Truck</h5>
                                            </a>
                                            <span class="designation">Tracking & Rastreio</span>
                                            <div class="tag"></div>
                                        </div>
                                    </div>
                                    <!-- single product area end -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- single product area start -->
                                    <div class="signle-product-start" data-tmp-cursor="lg text-secondary transparent fw-bold" data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                        <a href="{{ route('projects-details') }}" class="thumbnail">
                                            <img src="{{ asset('assets/images/portfolio/portfolio-12.png') }}" alt="corporate_business">
                                        </a>
                                        <div class="inner-content">
                                            <a href="{{ route('projects-details') }}">
                                                <h5 class="title">Torre de controle</h5>
                                            </a>
                                            <span class="designation">Gerenciamento de Frota</span>
                                            <div class="tag"></div>
                                        </div>
                                    </div>
                                    <!-- single product area end -->
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next" data-tmp-cursor="md transparent fw-bold" data-tmp-cursor-text="Próximo"></div>
                            <div class="swiper-button-prev" data-tmp-cursor="md transparent fw-bold" data-tmp-cursor-text="Anterior"></div>
                        </div>
                    </div>
                    <!-- product swiper area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- tmp product area end -->

    <!-- Tmp Servisec Processs Area Two Start -->
    <div class="tpm-services-process-area tmp-section-gap">
        <div class="container">
            <div class="row" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Corporate_service" style="filter: grayscale(100%) brightness(0%);">
                            <span class="subtitle">NOSSO processo de trabalho</span>
                        </div>
                        <h2 class="title split-collab">Todo o nosso processo de trabalho</h2>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-services">
                        <div class="services-inner">
                            <div class="thumbnail thumbnail-rounded border-top-left hover-animation">
                                <a href="#"><img src="{{ asset('assets/images/services/services-round-1.png') }}" alt="Business consulting services" ></a>
                                <div class="number-bg-round">
                                    <span>01</span>
                                </div>
                            </div>
                            <div class="services-content services-content-style-1 text-center">
                                <h5 class="title">Conhecer nossos clientes</h5>
                                <p class="description">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur ut minima impedit ducimus vero nulla .
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-services">
                        <div class="services-inner">
                            <div class="thumbnail thumbnail-rounded border-top-left hover-animation">
                                <a href="#"><img src="{{ asset('assets/images/services/services-round-2.png') }}" alt="Business consulting services"></a>
                                <div class="number-bg-round">
                                    <span>02</span>
                                </div>
                            </div>
                            <div class="services-content services-content-style-1 text-center">
                                <h5 class="title">Estratégia No atendimento</h5>
                                <p class="description">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit repellat nam, fugit, porro eum eligendi consectetur aperiam non aut necessitatibus repellendus.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-services">
                        <div class="services-inner">
                            <div class="thumbnail thumbnail-rounded border-top-left hover-animation">
                                <a href="#"><img src="{{ asset('assets/images/services/services-round-3.png') }}" alt="Business consulting services"></a>
                                <div class="number-bg-round">
                                    <span>03</span>
                                </div>
                            </div>
                            <div class="services-content services-content-style-1 text-center">
                                <h5 class="title">Inicio dos gerenciamentos</h5>
                                <p class="description">
                                   Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo, accusamus nulla deleniti accusantium neque sit eveniet soluta assumenda.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- Tmp Servisec Processs Area Two End -->

    <!-- Start Testimonial with brand  -->
    <div class="testimonial-with-brand bg-1 bg_image">
        <!-- Start Testimonial Area  -->
        <div class="testimonial-brand-area tmp-section-gapTop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonials-button-area">
                            <div class="section-head text-align-left">
                                <div class="section-sub-title">
                                    <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Corporate_service" style="filter: grayscale(100%) brightness(0%);">
                                    <span class="subtitle">Feedback dos Clientes</span>
                                </div>
                                <h2 class="title split-collab">O que nossos clientes dizem <br> Sobre Nós</h2>
                            </div>

                            <div class="button-next-prev">
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <!-- Slider main container -->
                        <div class="swiper-style-one tmp-section-gapBottom">
                            <div class="swiper-container-style-two">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="single-card card-horizontal">
                                            <div class="card-inner">
                                                <div class="content">
                                                    <div class="rating rating-style-three">
                                                        <div class="stars-group">
                                                            <div class="star">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star-half-stroke"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat at assumenda quibusdam ipsum totam nihil id est maiores suscipit officia facilis unde ab iusto distinctio magni, fugiat quidem recusandae placeat!</p>
                                                    <div class="content content-without-bg">
                                                        <div class="name">Clade Owen</div>
                                                        <div class="designation">CEO &amp; Founder</div>
                                                    </div>
                                                </div>
                                                <div class="thumbnail">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-1.jpg') }}" alt="testimonial">
                                                    <div class="icon icon-quote">
                                                        <i class="fa-duotone fa-quote-left"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-card card-horizontal">
                                            <div class="card-inner">
                                                <div class="content">
                                                    <div class="rating rating-style-three">
                                                        <div class="stars-group">
                                                            <div class="star">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star-half-stroke"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore in eligendi culpa quae tenetur, quaerat, harum modi error natus sequi aliquid reprehenderit</p>

                                                    <div class="content content-without-bg">
                                                        <div class="name">Gustavo Bozelli</div>
                                                        <div class="designation">Gerente de Operações</div>
                                                    </div>
                                                </div>
                                                <div class="thumbnail">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-2.jpg') }}" alt="testimonial">
                                                    <div class="icon icon-quote">
                                                        <i class="fa-duotone fa-quote-left"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-card card-horizontal">
                                            <div class="card-inner">
                                                <div class="content">
                                                    <div class="rating rating-style-three">
                                                        <div class="stars-group">
                                                            <div class="star">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star-half-stroke"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel modi id quasi magni, earum tempora quam et vero rem obcaecati sit, iusto cum dolores unde tempore, veritatis amet voluptas odit.</p>
                                                    <div class="content content-without-bg">
                                                        <div class="name">Reginaldo</div>
                                                        <div class="designation">CEO e Fundador</div>
                                                    </div>
                                                </div>
                                                <div class="thumbnail">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-1.jpg') }}" alt="testimonial">
                                                    <div class="icon icon-quote">
                                                        <i class="fa-duotone fa-quote-left"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-card card-horizontal">
                                            <div class="card-inner">
                                                <div class="content">
                                                    <div class="rating rating-style-three">
                                                        <div class="stars-group">
                                                            <div class="star">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star-half-stroke"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur culpa doloremque dolorum fuga, recusandae nostrum dolore sed nihil quod, aliquam quibusdam iste facilis impedit molestiae dignissimos accusantium voluptate excepturi deleniti?</p>
                                                    <div class="content content-without-bg">
                                                        <div class="name">Saulo Diniz</div>
                                                        <div class="designation">CEO e Fundador</div>
                                                    </div>
                                                </div>
                                                <div class="thumbnail">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-2.jpg') }}" alt="testimonial">
                                                    <div class="icon icon-quote">
                                                        <i class="fa-duotone fa-quote-left"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- If we need navigation buttons -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Testimonial Area  -->

        <!-- Start Brand Area  -->
        <div class="brand-area tmp-section-gapBottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="brand-inner tmp-section-gapTop">
                            <ul class="brand-list brand-style-1 justify-content-center justify-content-lg-between">
                                <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    <a href="#"><img src="{{ asset('assets/images/brand/brand-1.png') }}" alt="Brand Image"></a>
                                </li>

                                <li data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                    <a href="#"><img src="{{ asset('assets/images/brand/brand-2.png') }}" alt="Brand Image"></a>
                                </li>

                                <li data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                                    <a href="#"><img src="{{ asset('assets/images/brand/brand-3.png') }}" alt="Brand Image"></a>
                                </li>

                                <li data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                                    <a href="#"><img src="{{ asset('assets/images/brand/brand-4.png') }}" alt="Brand Image"></a>
                                </li>
                                <li data-sal-delay="550" data-sal="slide-up" data-sal-duration="800">
                                    <a href="#"><img src="{{ asset('assets/images/brand/brand-5.png') }}" alt="Brand Image"></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Brand Area  -->
    </div>
    <!-- End Testimonial with brand  -->

    <!-- Start Contact Area  -->
    <div class="contact-area-three tmp-section-gapTop">
        <div class="bg-shape">
            <img src="{{ asset('assets/images/cta/02.png') }}" alt="bussiness-contact">
        </div>
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="contact-inner">
                        <div class="section-head section-head-one-side text-align-left" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <span class="title">Fale conosco</span>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor magnaaliqua.
                            </p>
                        </div>

                        <ul class="ft-link ft-link-style-three" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                            <li>
                                <div class="single-contact background-transparent">
                                    <div class="icon">
                                        <i class="fa-light fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <span>Ligue para nós</span>
                                        <a class="contact-here" href="#">+55 (35) 99974660</a>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class="single-contact background-transparent">
                                    <div class="icon">
                                        <i class="fa-solid fa-envelope-open-text"></i>
                                    </div>

                                    <div class="content">
                                        <span>E-mail</span>
                                        <a class="contact-here" href="#">contato@viaintegra.com.br</a>
                                    </div>

                                </div>
                            </li>

                            <li>
                                <div class="single-contact background-transparent">
                                    <div class="icon">
                                        <i class="fa-solid fa-map-location-dot"></i>
                                    </div>
                                    <div class="content">
                                        <span>Endereço</span>
                                        <a class="contact-here" href="#">Lavras, Minas Gerais</a>
                                    </div>
                                </div>
                            </li>

                        </ul>

                        <div class="tmp-tag-list tag-list-one" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                            <a class="tag-list" href="#">Instagram</a>
                            <a class="tag-list" href="#">Linkedin</a>
                        </div>

                    </div>

                </div>
                <div class="col-lg-7" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">

                    <div class="contact-inner">
                        <div class="section-head section-head-one-side text-align-left">
                            <span class="title">ENTRE EM CONTATO</span>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor magnaaliqua.
                            </p>
                        </div>
                        <div class="contact-form style-two">
                            <form id="contact-form" action="#">
                                <div class="contact-form-wrapper row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="input-field" name="contact-name" placeholder="Nome" id="contact-name" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="input-field" name="contact-phone" placeholder="Telefone" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="input-field" name="contact-phone" placeholder="Email" type="email" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="input-field" type="text" id="subject" placeholder="Site" name="Website">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="input-field" placeholder="Como podemos ajudar" name="contact-message" id="contact-message"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-submit-group">
                                            <button name="submit" class="tmp-btn btn-primary" type="submit" id="submit">
                                                Enviar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area  -->

    <!-- Start team area  -->
    <div class="team-area tmp-section-gap bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Corporate services" style="filter: grayscale(100%) brightness(0%);">
                            <span>NOSSO TIME DE EXPERTS</span>
                        </div>
                        <h2 class="section-title split-collab">Conheça nosso time</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">

                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-team">
                        <a href="{{ route('team-details') }}" class="thumbnail" data-tmp-cursor="lg transparent fw-bold" data-tmp-cursor-text="Ver detalhes">
                            <img src="{{ asset('assets/images/team/team-2.png') }}" alt="Corporate team">
                        </a>
                        <div class="content">
                            <div class="team-name content-with-bg">
                                <a href="#" class="name-area">
                                    <h6 class="name">Reginaldo</h6>
                                </a>
                                <div class="designation">CEO & Gerente de Vendas</div>
                            </div>
                            <div class="share-icon-style-one">
                                <ul class="social-icons social-icons-with-bg">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                </ul>
                                <i class="fa-sharp fa-solid fa-share-nodes"></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-team">
                        <a href="{{ route('team-details') }}" class="thumbnail" data-tmp-cursor="lg transparent fw-bold" data-tmp-cursor-text="Ver detalhes">
                            <img src="{{ asset('assets/images/team/team-3.png') }}" alt="Corporate team">
                        </a>
                        <div class="content">
                            <div class="team-name content-with-bg">
                                <a href="#" class="name-area">
                                    <h6 class="name">Saulo Diniz</h6>
                                </a>
                                <div class="designation">CEO & CTO</div>
                            </div>
                            <div class="share-icon-style-one">
                                <ul class="social-icons social-icons-with-bg">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                </ul>
                                <i class="fa-sharp fa-solid fa-share-nodes"></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-team">
                        <a href="{{ route('team-details') }}" class="thumbnail" data-tmp-cursor="lg transparent fw-bold" data-tmp-cursor-text="Ver detalhes">
                            <img src="{{ asset('assets/images/team/team-1.png') }}" alt="Corporate team">
                        </a>
                        <div class="content">
                            <div class="team-name content-with-bg">
                                <a href="#" class="name-area">
                                    <h6 class="name">Gustavo Bozelli</h6>
                                </a>
                                <div class="designation">Gerente de Operações</div>
                            </div>
                            <div class="share-icon-style-one">
                                <ul class="social-icons social-icons-with-bg">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                </ul>
                                <i class="fa-sharp fa-solid fa-share-nodes"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End team area  -->


    <!-- Tmp Blog Area Start  -->
    <div class="tmp-blog-area tmp-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Corporate_service" style="filter: grayscale(100%) brightness(0%);">
                            <span class="subtitle">ÚLTIMOS BLOGS</span>
                        </div>
                        <h2 class="title split-collab">Últimas notícias & Artigos</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">

                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-blog">
                        <div class="blog-inner">
                            <div class="thumbnail">
                                <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/images/blog/blog-12.png') }}" alt="Business Consulting Blog"></a>
                                <div class="pmt-blog-meta">
                                    <ul class="all-meta">
                                        <li class="date"><span>20</span></li>
                                        <li class="month"><span>JAN</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-head">
                                    <span class="name">Sultan Ahmed</span>
                                    <span class="designation">Consulting</span>
                                </div>
                                <div class="blog-body">
                                    <a href="{{ route('blog-details') }}" class="title-area">
                                        <h4 class="title">Consulted admitting wooded
                                            is power acuteness.</h4>
                                    </a>
                                    <p class="description">
                                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor magnaaliqua.
                                    </p>
                                </div>
                                <a class="btn-read-more" href="{{ route('blog-details') }}">
                                    <span class="read-more-text">Saiba mais</span>
                                    <span class="read-more-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-blog">
                        <div class="blog-inner">
                            <div class="thumbnail">
                                <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/images/blog/blog-10.png') }}" alt="Business Consulting Blog"></a>
                                <div class="pmt-blog-meta">
                                    <ul class="all-meta">
                                        <li class="date"><span>20</span></li>
                                        <li class="month"><span>JAN</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-head">
                                    <span class="name">Sultan Ahmed</span>
                                    <span class="designation">Consulting</span>
                                </div>
                                <div class="blog-body">
                                    <a href="{{ route('blog-details') }}" class="title-area">
                                        <h4 class="title">Grow your business strategy
                                            with business consulting.</h4>
                                    </a>
                                    <p class="description">
                                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor magnaaliqua.
                                    </p>
                                </div>
                                <a class="btn-read-more" href="{{ route('blog-details') }}">
                                    <span class="read-more-text">Saiba mais</span>
                                    <span class="read-more-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-blog">
                        <div class="blog-inner">
                            <div class="thumbnail">
                                <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/images/blog/blog-11.png') }}" alt="Business Consulting Blog"></a>
                                <div class="pmt-blog-meta">
                                    <ul class="all-meta">
                                        <li class="date"><span>20</span></li>
                                        <li class="month"><span>JAN</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-head">
                                    <span class="name">Notícias Truck</span>
                                    <span class="designation">Consultoria</span>
                                </div>
                                <div class="blog-body">
                                    <a href="{{ route('blog-details') }}" class="title-area">
                                        <h4 class="title">Lorem ipsum dolor sit amet.</h4>
                                    </a>
                                    <p class="description">
                                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor magnaaliqua.
                                    </p>
                                </div>
                                <a class="btn-read-more" href="{{ route('blog-details') }}">
                                    <span class="read-more-text">Saiba mais</span>
                                    <span class="read-more-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Tmp Blog Area Start  -->

    <!-- Start Footer Area  -->
    <footer class="footer-area footer-style-one-wrapper bg-color-footer bg_images tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="subscribe-area subscribe-style-1">
                        <div class="subscribe-inner">
                            <div class="title">Newsletter</div>
                            <form action="#" class="newsletter-form-1 mt--40">
                                <input type="email" placeholder="Seu e-mail" required>
                                <button type="submit" class="tmp-btn btn-primary">
                                    Inscreva-se <i class="fa-sharp fa-regular fa-paper-plane"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-main footer-style-one">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-wrapper border-right mr--20">
                            <div class="logo">
                                <a href="{{ route('index') }}">
                                    <img style="width: 108px; height: 61px;" src="{{ asset('assets/images/logo/logo.png') }}" alt="logo">
                                </a>
                            </div>

                            <p class="description">
                                Conectando Soluções Logísticas com Tecnologia de Ponta. Conheça nossas soluções inovadoras para mobilidade urbana, transporte rodoviário e serviços de guincho.
                            </p>


                            <div class="day-time">
                                <div class="icon"><i class="fa-solid fa-alarm-clock"></i></div>
                                <div class="content">
                                    <div class="day">Segunda - Sexta:</div>
                                    <div class="time">9:00 AM – 8:00 PM</div>
                                </div>
                            </div>

                            <ul class="social-icons solid-social-icons rounded-social-icons">
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="single-footer-wrapper pl-50 pl_md--0 pl_sm--0">
                            <h5 class="ft-title">Links</h5>
                            <ul class="ft-link">
                                <li>
                                    <a href="{{ route('about') }}">Sobre a empresa</a>
                                </li>
                                <li>
                                    <a href="{{ route('team') }}">Conheça nosso time</a>
                                </li>
                                <li>
                                    <a href="{{ route('service') }}">Nosso serviços</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog') }}">Notícias & Media</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Entre em contato</a>
                                </li>

                                <li>
                                    <a href="{{ route('faq') }}">Suporte</a>
                                </li>

                            </ul>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-footer-wrapper pr--15">
                            <h5 class="ft-title">Post recentes</h5>

                            <div class="single-post">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/images/footer/small-post.jpg') }}" alt="Business_Corporate">
                                </div>
                                <div class="content">
                                    <div class="date"><i class="fa-light fa-calendar-days"></i><span>12 Fev, 2024</span></div>

                                    <a href="{{ route('blog-details') }}">
                                        <h6 class="title">Lorem ipsum dolor, sit</h6>
                                    </a>
                                </div>
                            </div>

                            <div class="single-post">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/images/footer/small-post-2.jpg') }}" alt="empresas">
                                </div>
                                <div class="content">
                                    <div class="date"><i class="fa-light fa-calendar-days"></i><span>12 Fev, 2024</span></div>

                                    <a href="{{ route('blog-details') }}">
                                        <h6 class="title">Ajudando equipes a ter sucesso nos negócios</h6>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-footer-wrapper">
                            <h5 class="ft-title">Para mais informações:</h5>
                            <ul class="ft-link">
                                <li class="ft-location">Lavras, Minas gerais, Brasil</li>

                                <li>
                                    <div class="single-contact">

                                        <div class="icon">
                                            <i class="fa-solid fa-envelope-open-text"></i>
                                        </div>

                                        <div class="content">
                                            <span>E-mail:</span>
                                            <a href="mailto:webmaster@example.com">contato@viaintegra.com.br</a>
                                        </div>

                                    </div>
                                </li>

                                <li>
                                    <div class="single-contact">
                                        <div class="icon">
                                            <i class="fa-light fa-phone"></i>
                                        </div>
                                        <div class="content">
                                            <span>Telefone:</span>
                                            <a href="tel:+4733378901">+55 (35) 99974660</a>
                                        </div>

                                    </div>

                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright-area-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-wrapper">
                        <p>© Copyright 2024. All Rights Reserved by <a href="#">TKX Conexão logística</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Area  -->


@endsection
