@extends('layouts.layout1')

@php
    $title = 'Serviço Personalizado';
    $subtitle = 'Serviço Personalizado';
@endphp


@section('content')

     <!-- Start Contact Form Area  -->
     <div class="contact-area contact-bg-1 bg_image tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="contact-inner">
                        <div class="section-head section-head-one-side text-align-left">
                            <h2 class="title">Atendimento Personalizado</h2>
                            <p class="description mt--30">
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
                                        <span>Telefone</span>
                                        <a class="contact-here" href="tel:+553599974660">+55 (35) 99974660</a>
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
                                        <a class="contact-here" href="mailto:webmaster@example.com">info@uibundle.com</a>
                                    </div>

                                </div>
                            </li>

                            <li>
                                <div class="single-contact background-transparent">
                                    <div class="icon">
                                        <i class="fa-regular fa-map-location-dot"></i>
                                    </div>
                                    <div class="content">
                                        <span>Endereço</span>
                                        <a class="contact-here" href="#">25/5 Double Street, Texas Houston USA</a>
                                    </div>
                                </div>
                            </li>

                        </ul>


                        <div class="tmp-tag-list tag-list-one">
                            <a class="tag-list" href="#">Facebook</a>
                            <a class="tag-list" href="#">Linkedin</a>
                        </div>


                    </div>
                </div>
                <div class="col-lg-7 mt_md--50 mt_sm--50" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">

                    <div class="contact-form">
                        <div class="section-head section-head-one-side text-align-left">
                            <span class="subtitle">ENVIE UMA MENSAGEM</span>
                            <h2 class="title">Serviço personalizado</h2>
                        </div>



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
                                        <input class="input-field" name="contact-phone" placeholder="Email" type="email">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="input-field" type="text" id="subject" placeholder="Site" name="Website">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="input-field" placeholder="Como podemos ajudar" name="contact-message" id="contact-message" required></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-submit-group">
                                        <p class="check-condition">
                                            <input class="check-box" type="checkbox" id="terms" name="terms">
                                            <label class="condition" for="terms">Eu concorco com oso <span>terms</span> e <span>condições</span></label>
                                        </p>
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
    <!-- Start Contact Form Area  -->

@endsection
