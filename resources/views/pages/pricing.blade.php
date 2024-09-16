@extends('layouts.layout1')

@php
    $title = 'Nossos Planos';
    $subtitle = 'Planos';
@endphp


@section('content')

     <!-- Start pricing area  -->
     <div class="pricing-area pricing-style-one tmp-section-gap">
        <div class="container">

            <div class="row" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="col-lg-12">
                    <div class="section-head pb-40">
                        <div class="section-sub-title color-secondary  center-title">
                            <span>MELHORES PREÇOS</span>
                        </div>
                        <h2 class="section-title">Planos flexíveis para pequenos e rápidos - <br/>negócio em crescimento</h2>
                    </div>
                </div>
            </div>

            <div class="row g-5">

                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="pricing-table pricing-style-one">
                        <div class="pricing-header">
                            <div class="pricing-header-inner">
                                <h3 class="title">Plano básico</h3>
                                <div class="price-wrap">
                                    <div class="monthly-pricing">
                                        <div class="amount"><span class="dolour">R$ </span>29.<span class="zero">00</span></div>
                                        <span class="duration">Por Mês</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="pricing-body">
                            <ul class="plan-offer-list">
                                <li>
                                    <i class="fa-light fa-check"></i>Business Consulting
                                </li>

                                <li>
                                    <i class="fa-light fa-check"></i>24/7 Customer Support
                                </li>

                                <li>
                                    <i class="fa-light fa-check"></i>Business Planning
                                </li>



                                <li class="off">
                                    <i class="fa-sharp fa-light fa-xmark"></i>Digital Business Solution
                                </li>
                                <li class="off">
                                    <i class="fa-sharp fa-light fa-xmark"></i>Human Research
                                </li>


                            </ul>
                        </div>
                        <div class="pricing-bottom">
                            <div class="pricing-btn">
                                <a href="#" class="tmp-btn">Contratar Plano</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="pricing-table pricing-style-one">
                        <div class="pricing-header">
                            <div class="pricing-header-inner">
                                <h3 class="title">Plano Premium</h3>
                                <div class="price-wrap">
                                    <div class="monthly-pricing">
                                        <div class="amount"><span class="dolour">R$ </span>59.<span class="zero">00</span></div>
                                        <span class="duration">Por Mês</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-body">
                            <ul class="plan-offer-list">
                                <li>
                                    <i class="fa-light fa-check"></i>Business Consulting
                                </li>

                                <li>
                                    <i class="fa-light fa-check"></i>24/7 Customer Support
                                </li>

                                <li>
                                    <i class="fa-light fa-check"></i>Business Planning
                                </li>

                                <li>
                                    <i class="fa-light fa-check"></i>Digital Business Solution
                                </li>
                                <li class="off">
                                    <i class="fa-sharp fa-light fa-xmark"></i>Human Research
                                </li>


                            </ul>
                        </div>
                        <div class="pricing-bottom">
                            <div class="pricing-btn">
                                <a href="#" class="tmp-btn">Contratar Plano</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    <div class="pricing-table pricing-style-one">
                        <div class="pricing-header">
                            <div class="pricing-header-inner">
                                <h3 class="title">Plano Expert</h3>
                                <div class="price-wrap">
                                    <div class="monthly-pricing">
                                        <div class="amount"><span class="dolour">R$ </span>89.<span class="zero">00</span></div>
                                        <span class="duration">Por Mês</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-body">
                            <ul class="plan-offer-list">
                                <li>
                                    <i class="fa-light fa-check"></i>Business Consulting
                                </li>

                                <li>
                                    <i class="fa-light fa-check"></i>24/7 Customer Support
                                </li>

                                <li>
                                    <i class="fa-light fa-check"></i>Business Planning
                                </li>
                                <li>
                                    <i class="fa-light fa-check"></i>Digital Business Solution
                                </li>
                                <li>
                                    <i class="fa-light fa-check"></i>Human Research
                                </li>


                            </ul>
                        </div>
                        <div class="pricing-bottom">
                            <div class="pricing-btn">
                                <a href="#" class="tmp-btn">Contratar Plano</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End pricing area  -->

@endsection
