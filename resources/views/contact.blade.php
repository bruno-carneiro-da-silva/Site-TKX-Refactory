@extends('layouts.layout1')

@php
    $title = 'Fale Conosco';
    $subtitle = 'Fale Conosco';
@endphp


@section('content')

 <!-- tmp contact area -->
 <div class="contact-area tmp-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="contact-inner">
                        <div class="section-head section-head-one-side text-align-left">
                            <span class="title">Fale Conosco</span>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor magnaaliqua.
                            </p>
                        </div>

                        <ul class="ft-link ft-link-style-three">
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
                                        <a class="contact-here" href="mailto:webmaster@example.com">contato@viaintegra.com.br</a>
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
                <div class="col-lg-7">

                    <div class="contact-inner">
                        <div class="section-head section-head-one-side text-align-left">
                            <span class="title">ENVIA UMA MENSAGEM</span>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor magnaaliqua.
                            </p>
                        </div>
                        <div class="contact-form style-two">
                            <div id="form-messages"></div>
                            <form id="contact-form" action="mailer.php" method="post">
                                <div class="contact-form-wrapper row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="input-field" name="name" placeholder="Nome" id="contact-name" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="input-field" name="contact-phone" placeholder="Telefone" type="text">
                                        </div>
                                    </div>


                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="input-field" name="email" placeholder="Email" type="email" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="input-field" type="text" id="subject" placeholder="Assunto" name="subject">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="input-field" placeholder="Como podemos ajudar" name="message" id="contact-message"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-submit-group">
                                            <button name="submit" class="tmp-btn btn-gradiant-two" type="submit" id="submit">
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
    <!-- tmp contact area -->

    <div class="tmp-map-area tmp-sectiongapBottom">
        <div class="map-area-flotimg-container">
            <iframe src="{{ asset('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59495.51385579168!2d-45.03954990605441!3d-21.252870645814948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9ffd8039b103f9%3A0x39e3fcfba35cb1f3!2sLavras%2C%20State%20of%20Minas%20Gerais%2C%2037200-000!5e0!3m2!1sen!2sbr!4v1726325150105!5m2!1sen!2sbr') }}" width="600" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

@endsection
