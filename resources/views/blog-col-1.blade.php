@extends('layouts.layout1')

@php
    $bodyClass='service-details';
    $title = 'Último Blog';
    $subtitle = 'Último Blog';
@endphp


@section('content')

  <!-- tmp service section -->
    <div class="tmp-service-section tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- single projects- column one -->
                    <div class="single-projects-one-col-1">
                        <a href="{{ route('blog-details') }}" class="thumbnail">
                            <img src="{{ asset('assets/images/blog/blog-07.jpg') }}" alt="">
                        </a>
                        <div class="inner-blog-single">
                            <div class="inner">
                                <div class="category">
                                    Sultan Ahmed / Consultoria
                                </div>
                                <a href="{{ route('blog-details') }}">
                                    <h3 class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                                </a>
                                <p class="disc">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget ornare quam. Sed sit amet sem sollicitudin, condiment diam sed, consequat tellus. Quisque ac odio eget ligula gravida.
                                </p>
                                <a href="{{ route('blog-details') }}" class="read-more-btn">Saiba mais <i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single projects- column one end -->
                    <!-- single projects- column one -->
                    <div class="single-projects-one-col-1">
                        <a href="{{ route('blog-details') }}" class="thumbnail">
                            <img src="{{ asset('assets/images/blog/blog-08.jpg') }}" alt="">
                        </a>
                        <div class="inner-blog-single">
                            <div class="inner">
                                <div class="category">
                                    Sultan Ahmed / Consultoria
                                </div>
                                <a href="{{ route('blog-details') }}">
                                    <h3 class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                                </a>
                                <p class="disc">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget ornare quam. Sed sit amet sem sollicitudin, condiment diam sed, consequat tellus. Quisque ac odio eget ligula gravida.
                                </p>
                                <a href="{{ route('blog-details') }}" class="read-more-btn">Saiba mais <i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single projects- column one end -->
                    <!-- single projects- column one -->
                    <div class="single-projects-one-col-1">
                        <a href="{{ route('blog-details') }}" class="thumbnail">
                            <img src="{{ asset('assets/images/blog/blog-09.jpg') }}" alt="">
                        </a>
                        <div class="inner-blog-single">
                            <div class="inner">
                                <div class="category">
                                    Sultan Ahmed / Consultoria
                                </div>
                                <a href="{{ route('blog-details') }}">
                                    <h3 class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                                </a>
                                <p class="disc">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget ornare quam. Sed sit amet sem sollicitudin, condiment diam sed, consequat tellus. Quisque ac odio eget ligula gravida.
                                </p>
                                <a href="{{ route('blog-details') }}" class="read-more-btn">Saiba mais <i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single projects- column one end -->
                    <!-- single projects- column one -->
                    <div class="single-projects-one-col-1">
                        <a href="{{ route('blog-details') }}" class="thumbnail">
                            <img src="{{ asset('assets/images/blog/blog-07.jpg') }}" alt="">
                        </a>
                        <div class="inner-blog-single">
                            <div class="inner">
                                <div class="category">
                                    Sultan Ahmed / Consultoria
                                </div>
                                <a href="{{ route('blog-details') }}">
                                    <h3 class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                                </a>
                                <p class="disc">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget ornare quam. Sed sit amet sem sollicitudin, condiment diam sed, consequat tellus. Quisque ac odio eget ligula gravida.
                                </p>
                                <a href="{{ route('blog-details') }}" class="read-more-btn">Saiba mais <i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single projects- column one end -->

                    <!-- tmp pagination area start -->
                    <div class="tmp-pagination-area-next-pev">
                        <button><i class="fa-regular fa-chevron-left"></i></button>
                        <button>1</button>
                        <button>2</button>
                        <button>3</button>
                        <button><i class="fa-sharp fa-regular fa-chevron-right"></i></button>
                    </div>
                    <!-- tmp pagination area end -->
                </div>
                <div class="col-lg-4 pl--50">
                    <div class="side-bar-details-page">
                        <!-- single bar -->
                        <div class="signle-side-bar search-area">
                            <div class="body">
                                <div class="search-area">
                                    <input type="text" placeholder="Entry Key">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                            </div>
                        </div>
                        <!-- single bar end -->
                        <div class="signle-side-bar recent-post">
                            <div class="header">
                                <h3 class="title">Posts Recentes</h3>
                            </div>
                            <div class="body mt--50">
                                <!-- single blog-post sidevar -->
                                <div class="single-blog-recent-post-sidebar">
                                    <a href="#" class="thumbnail">
                                        <img src="{{ asset('assets/images/blog/blog-4.jpg') }}" alt="blog-Post">
                                        <div class="inner">
                                            <span class="post-time">
                                                <i class="fa-regular fa-clock"></i>
                                                12 Jan, 2023
                                            </span>
                                            <h6 class="title">
                                                Commanded household
                                                smallness delivered.
                                            </h6>
                                        </div>
                                    </a>
                                </div>
                                <!-- single blog-post  ed -->
                                <!-- single blog-post sidevar -->
                                <div class="single-blog-recent-post-sidebar">
                                    <a href="#" class="thumbnail">
                                        <img src="{{ asset('assets/images/blog/blog-5.jpg') }}" alt="blog-Post">
                                        <div class="inner">
                                            <span class="post-time">
                                                <i class="fa-regular fa-clock"></i>
                                                12 Jan, 2023
                                            </span>
                                            <h6 class="title">
                                                Future Plan & Strategy for
                                                Construction
                                            </h6>
                                        </div>
                                    </a>
                                </div>
                                <!-- single blog-post  ed -->
                                <!-- single blog-post sidevar -->
                                <div class="single-blog-recent-post-sidebar">
                                    <a href="#" class="thumbnail">
                                        <img src="{{ asset('assets/images/blog/blog-6.jpg') }}" alt="blog-Post">
                                        <div class="inner">
                                            <span class="post-time">
                                                <i class="fa-regular fa-clock"></i>
                                                12 Jan, 2023
                                            </span>
                                            <h6 class="title">
                                                Melancholy particular
                                                devonshire alteration
                                            </h6>
                                        </div>
                                    </a>
                                </div>
                                <!-- single blog-post  ed -->
                            </div>
                        </div>
                        <!-- single bar end -->
                        <div class="signle-side-bar tags">
                            <div class="header">
                                <h3 class="title">Tags</h3>
                            </div>
                            <div class="body mt--50">
                                <div class="tags-wrapper-side-bar">
                                    <!-- sigle tags -->
                                    <div class="signle-tag-side-bar">
                                        <button>Viagem</button>
                                    </div>
                                    <!-- sigle tags end -->
                                    <!-- sigle tags -->
                                    <div class="signle-tag-side-bar">
                                        <button>Logistica</button>
                                    </div>
                                    <!-- sigle tags end -->
                                    <!-- sigle tags -->
                                    <div class="signle-tag-side-bar">
                                        <button>Passageiros</button>
                                    </div>
                                    <!-- sigle tags end -->
                                    <!-- sigle tags -->
                                    <div class="signle-tag-side-bar">
                                        <button>Mulheres</button>
                                    </div>
                                    <!-- sigle tags end -->
                                    <!-- sigle tags -->
                                    <div class="signle-tag-side-bar">
                                        <button>Motoristas</button>
                                    </div>
                                    <!-- sigle tags end -->
                                    <!-- sigle tags -->
                                    <div class="signle-tag-side-bar">
                                        <button>Mobilidade</button>
                                    </div>
                                    <!-- sigle tags end -->
                                    <!-- sigle tags -->
                                    <div class="signle-tag-side-bar">
                                        <button>Tecnologia</button>
                                    </div>
                                    <!-- sigle tags end -->
                                </div>
                            </div>
                        </div>
                        <!-- single bar -->
                        <div class="signle-side-bar call-to-action">
                            <div class="easy-call-to-action">
                                <div class="icon-center-call">
                                    <i class="fa-light fa-phone"></i>
                                </div>
                                <h3 class="title animated fadeIn">Precisa de ajuda?</h3>
                                <p class="disc">
                                   Entre em contato com nossa equipe estamos prontos para te responder o mais rápido possível.
                                </p>
                                <a href="Tel:1234567890">+(012)3456789</a>
                            </div>
                        </div>
                        <!-- single bar end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tmp service section end -->

@endsection
