@extends('layouts.layout1')

@php
    $bodyClass='service-details';
    $title = 'Latest Blog';
    $subtitle = 'Latest Blog';
@endphp


@section('content')

    <!-- latest blog area start -->
    <div class="altest-blog-area tmp-section-gap">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="single-blog">
                        <div class="blog-inner">
                            <div class="thumbnail">
                                <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/images/blog/blog-2.png') }}" alt="Business Consulting Blog"></a>
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
                                    <span class="designation">Consultoria</span>
                                </div>
                                <div class="blog-body">
                                    <a href="{{ route('blog-details') }}" class="title-area">
                                        <h4 class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae ipsum.</h4>
                                    </a>
                                    <p class="description">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae ipsum quasi maxime, nobis officiis id.
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
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="single-blog">
                        <div class="blog-inner">
                            <div class="thumbnail">
                                <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/images/blog/blog-2.png') }}" alt="Business Consulting Blog"></a>
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
                                    <span class="designation">Consultoria</span>
                                </div>
                                <div class="blog-body">
                                    <a href="{{ route('blog-details') }}" class="title-area">
                                        <h4 class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae ipsum.</h4>
                                    </a>
                                    <p class="description">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae ipsum quasi maxime, nobis officiis id.
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
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="single-blog">
                        <div class="blog-inner">
                            <div class="thumbnail">
                                <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/images/blog/blog-2.png') }}" alt="Business Consulting Blog"></a>
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
                                    <span class="designation">Consultoria</span>
                                </div>
                                <div class="blog-body">
                                    <a href="{{ route('blog-details') }}" class="title-area">
                                        <h4 class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae ipsum.</h4>
                                    </a>
                                    <p class="description">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae ipsum quasi maxime, nobis officiis id.
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
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="single-blog">
                        <div class="blog-inner">
                            <div class="thumbnail">
                                <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/images/blog/blog-2.png') }}" alt="Business Consulting Blog"></a>
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
                                    <span class="designation">Consultoria</span>
                                </div>
                                <div class="blog-body">
                                    <a href="{{ route('blog-details') }}" class="title-area">
                                        <h4 class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae ipsum.</h4>
                                    </a>
                                    <p class="description">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae ipsum quasi maxime, nobis officiis id.
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
                <div class="tmp-pagination-area-next-pev mt--50">
                    <button><i class="fa-regular fa-chevron-left"></i></button>
                    <button>1</button>
                    <button>2</button>
                    <button>3</button>
                    <button><i class="fa-sharp fa-regular fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- latest blog area end -->

@endsection
