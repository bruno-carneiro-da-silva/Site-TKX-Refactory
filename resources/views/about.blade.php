@extends('layouts.layout1')

@php
    $title = 'Sobre nós';
    $subtitle = 'Sobre nós';
@endphp


@section('content')

    <!-- Tpm About Area Start  -->
    <div class="about-area tmp-section-gap about-style-one">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-thumbnails">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/about/01.png') }}" alt="corporate business">

                            <div class="image-two">
                                <img src="{{ asset('assets/images/about/03.png') }}" alt="corporate business">
                            </div>

                            <div class="image-three animated">
                                <img class="" src="{{ asset('assets/images/about/02.png') }}" alt="corporate business">
                            </div>

                            <div class="square"></div>

                            <div class="flower">
                                <img src="{{ asset('assets/images/about/flower.png') }}" alt="">
                            </div>

                            <div class="product-share">
                                <div class="rating">
                                    <div class="number">4.8</div>
                                    <div class="stars-group">
                                        <div class="star">
                                            <i  class="fa-solid fa-star"></i>
                                            <i  class="fa-solid fa-star"></i>
                                            <i  class="fa-solid fa-star"></i>
                                            <i  class="fa-solid fa-star"></i>

                                            <i class="fa-solid fa-star-half-stroke"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-share">
                                    <a href="#" class="avatar" data-tooltip="Mark JOrdan" tabindex="0"><img src="{{ asset('assets/images/about/4.png') }}" alt="education"></a>

                                    <a href="#" class="avatar" data-tooltip="Mark JOrdan" tabindex="0"><img src="{{ asset('assets/images/about/5.png') }}" alt="education"></a>

                                    <a href="#" class="avatar" data-tooltip="Mark JOrdan" tabindex="0"><img src="{{ asset('assets/images/about/6.png') }}" alt="education"></a>

                                    <a href="#" class="avatar" data-tooltip="Mark JOrdan" tabindex="0"><img src="{{ asset('assets/images/about/7.png') }}" alt="education"></a>


                                </div>
                            </div>
                        </div>

                        <!-- video icon -->
                        <div class="vedio-icone" data-tmp-cursor="lg" data-tmp-cursor-text="Reproduzir vídeo">
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
                                <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Corporate_service"  style="filter: grayscale(100%) brightness(0%);">
                                <span class="subtitle">SOBRE NÓS</span>
                            </div>
                            <h2 class="title split-collab">Curabitur eget ornare quam <br> Curabitur eget </h2>
                        </div>

                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget ornare quam. Sed sit amet sem sollicitudin, condimentum diam sed, consequat tellus. Quisque ac odio eget ligula gravida efficitur. Nunc facilisis sagittis magna, non venenatis mauris luctus quis.
                        </p>
                        <!-- Prograss bar Start  -->
                        <div class="single-progress-area progress-stye-one">
                            <div class="progress-top">
                                <p class="name">TKX Truck</p>
                                <span class="parcent">
                                85%
                            </span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="single-progress-area progress-stye-one">
                            <div class="progress-top">
                                <p class="name">TKX Mobilidade inteligente</p>
                                <span class="parcent">
                                66%
                            </span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 66%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!-- Prograss bar End  -->
                        <div class="thumbnail-with-title">
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

    <!-- working process -->
    <!-- Tmp Servisec Processs Area Two Start -->
    <div class="tpm-services-process-area tmp-section-gap bg-working-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Corporate_service" style="filter: grayscale(100%) brightness(0%);">
                            <span class="subtitle">NOSSO processo de serviço</span>
                        </div>
                        <h2 class="title split-collab">Como funciona</h2>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-services">
                        <div class="services-inner">
                            <div class="thumbnail thumbnail-rounded border-top-left hover-animation">
                                <a href="#"><img src="{{ asset('assets/images/services/service-round-1.png') }}" alt="Business consulting services"></a>
                                <div class="number-bg-round">
                                    <span>01</span>
                                </div>
                            </div>
                            <div class="services-content services-content-style-1 text-center">
                                <h5 class="title">Lorem ipsum dolor sit amet consectetur</h5>
                                <p class="description">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto corporis temporibus accusantium veniam sed eveniet error sit, voluptatum non nulla amet dolores eaque recusandae assumenda, itaque magnam soluta rerum dolore.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-services">
                        <div class="services-inner">
                            <div class="thumbnail thumbnail-rounded border-top-left hover-animation">
                                <a href="#"><img src="{{ asset('assets/images/services/service-round-1.png') }}" alt="Business consulting services"></a>
                                <div class="number-bg-round">
                                    <span>02</span>
                                </div>
                            </div>
                            <div class="services-content services-content-style-1 text-center">
                                <h5 class="title">Magnam soluta rerum dolore.</h5>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero unde possimus, aspernatur inventore quis numquam fuga suscipit architecto, obcaecati perferendis asperiores quod laborum nesciunt maxime quasi dolore hic tenetur enim!.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-services">
                        <div class="services-inner">
                            <div class="thumbnail thumbnail-rounded border-top-left hover-animation">
                                <a href="#"><img src="{{ asset('assets/images/services/service-round-1.png') }}" alt="Business consulting services"></a>
                                <div class="number-bg-round">
                                    <span>03</span>
                                </div>
                            </div>
                            <div class="services-content services-content-style-1 text-center">
                                <h5 class="title">Magnam soluta rerum dolore</h5>
                                <p class="description">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae molestiae harum ipsam magni saepe itaque incidunt! Nostrum maiores ex, tenetur sed aliquam, ad veritatis rerum officia itaque dolor animi illo?.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- Tmp Servisec Processs Area Two End -->
    <!-- working process end -->

    <div class="team-area tmp-section-gap bg-white">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-team">
                        <a href="{{ route('team-details') }}" data-tmp-cursor="lg" data-tmp-cursor-text="View Details" class="thumbnail">
                            <img src="{{ asset('assets/images/team/team-2.png') }}" alt="Corporate team">
                        </a>
                        <div class="content">
                            <div class="team-name content-with-bg">
                                <a href="#" class="name-area">
                                    <h6 class="name">Clade Owen</h6>
                                </a>
                                <div class="designation">CEO &amp; Fundadora</div>
                            </div>
                            <div class="share-icon-style-one">
                                <ul class="social-icons social-icons-with-bg">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                                <i class="fa-sharp fa-solid fa-share-nodes"></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-team">
                        <a href="{{ route('team-details') }}" data-tmp-cursor="lg" data-tmp-cursor-text="View Details" class="thumbnail">
                            <img src="{{ asset('assets/images/team/team-3.png') }}" alt="Corporate team">
                        </a>
                        <div class="content">
                            <div class="team-name content-with-bg">
                                <a href="#" class="name-area">
                                    <h6 class="name">Clade Owen</h6>
                                </a>
                                <div class="designation">CEO &amp; Fundador</div>
                            </div>
                            <div class="share-icon-style-one">
                                <ul class="social-icons social-icons-with-bg">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                                <i class="fa-sharp fa-solid fa-share-nodes"></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-team">
                        <a href="{{ route('team-details') }}" data-tmp-cursor="lg" data-tmp-cursor-text="View Details" class="thumbnail">
                            <img src="{{ asset('assets/images/team/team-1.png') }}" alt="Corporate team">
                        </a>
                        <div class="content">
                            <div class="team-name content-with-bg">
                                <a href="#" class="name-area">
                                    <h6 class="name">Clade Owen</h6>
                                </a>
                                <div class="designation">CEO &amp; Fundador</div>
                            </div>
                            <div class="share-icon-style-one">
                                <ul class="social-icons social-icons-with-bg">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                                <i class="fa-sharp fa-solid fa-share-nodes"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Testimonial with brand  -->
    <div class="testimonial-with-brand bg-1">
        <!-- Start Testimonial Area  -->
        <div class="testimonial-brand-area tmp-section-gapTop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonials-button-area">
                            <div class="section-head text-align-left">
                                <div class="section-sub-title">
                                    <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Corporate_service">
                                    <span class="subtitle">Feedback dos Clientes</span>
                                </div>
                                <h2 class="title split-collab">Lorem ipsum, dolor sit ame <br> dolor sit ame</h2>
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

                                                    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta incidunt, repudiandae nisi, cum eligendi odio facilis sed nam vero facere sit amet optio alias mollitia exercitationem? Laudantium est quam incidunt..</p>

                                                    <div class="content content-without-bg">
                                                        <div class="name">Clade Owen</div>
                                                        <div class="designation">CEO &amp; Fundador</div>
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

                                                    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, non ipsa voluptatem dolor illum corporis suscipit facere ea ab? Beatae, iure! Tenetur nobis sequi id minus ullam eveniet, dolorem unde.</p>

                                                    <div class="content content-without-bg">
                                                        <div class="name">Nicolas Alvin</div>
                                                        <div class="designation">Desenvolvedor</div>
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

                                                    <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio ad soluta dolor magni ipsum aliquid, placeat totam repellat repudiandae, ipsa, architecto accusantium libero provident eos porro aperiam officiis in commodi.</p>

                                                    <div class="content content-without-bg">
                                                        <div class="name">Lara Willie</div>
                                                        <div class="designation">UX Designer</div>
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

                                                    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum sint, vitae inventore temporibus hic incidunt minus sunt tempora nisi deserunt ab voluptatem accusamus veniam laborum. Minus iure reprehenderit possimus facere.</p>

                                                    <div class="content content-without-bg">
                                                        <div class="name">Clade Herbert</div>
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
                                <li>
                                    <a href="#"><img src="{{ asset('assets/images/brand/brand-1.png') }}" alt="Brand Image"></a>
                                </li>

                                <li>
                                    <a href="#"><img src="{{ asset('assets/images/brand/brand-2.png') }}" alt="Brand Image"></a>
                                </li>

                                <li>
                                    <a href="#"><img src="{{ asset('assets/images/brand/brand-3.png') }}" alt="Brand Image"></a>
                                </li>

                                <li>
                                    <a href="#"><img src="{{ asset('assets/images/brand/brand-4.png') }}" alt="Brand Image"></a>
                                </li>
                                <li>
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

@endsection
