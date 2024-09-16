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
                                    <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo" style="width: 108px; height: 61px;">
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
                                <li><a href="https://www.instagram.com/tkxmobilidadelavras/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
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
                                        <h6 class="title">Lorem ipsum, dolor sit amet</h6>
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
