 <!-- tpm-header-area end -->

 <div id="side-hide">
        <div class="top-area">
            <a href="{{ route('index') }}" class="logo-area">
                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo" style="width: 108px; height: 55px;" >
            </a>
            <div class="close-icon-area">
                <div id="close-slide__main">
                    <i class="fa-solid fa-x"></i>
                </div>
            </div>
        </div>
        <div class="body">

            <div class="image-area-feature">
                <img src="{{ asset('assets/images/sidebar/01.jpg') }}" alt="sidebar">
            </div>
            <h5 class="title mt--30">Transformando suas ideias em reality</h5>
            <p class="disc">
                Sed ut perspiciatis unde omnis natus error voluptatem santium doloremque laudantium, totam rem aperiam, eaque.
            </p>
            <div class="short-contact-area-side-collups">
                <!-- single contact information -->
                <div class="single-contact-information-side">
                    <i class="fa-solid fa-phone"></i>
                    <div class="information">
                        <span>Ligar agora</span>
                        <a href="#" class="number">+92 (8800) - 98670</a>
                    </div>
                </div>
                <!-- single contact information end -->
                <!-- single contact information -->
                <div class="single-contact-information-side">
                    <i class="fa-light fa-envelope"></i>
                    <div class="information">
                        <span>Nos envie um e-mail</span>
                        <a href="#" class="number">example@info.com</a>
                    </div>
                </div>
                <!-- single contact information end -->
                <!-- single contact information -->
                <div class="single-contact-information-side">
                    <i class="fa-sharp fa-light fa-location-dot"></i>
                    <div class="information">
                        <span>Nosso Endereço</span>
                        <a href="#" class="number">Lavras, Minas Gerais</a>
                    </div>
                </div>
                <!-- single contact information end -->
            </div>
            <!-- social area start -->
            <ul class="social-icons solid-social-icons rounded-social-icons">
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
            <!-- social area end -->
        </div>
        <!-- mobile menu area start -->
        <div class="mobile-menu-main">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">
                    <li>
                        <a href="{{ url('/') }}" class="main" id="close-slide_main">PÁGINA INICIAL</a>
                    </li>
                    <li>
                        <a class="main click-scroll" href="{{ url('/') }}#section_2">SOBRE NÓS</a>
                    </li>
                    <li>
                         <a class="main click-scroll" href="{{ url('/') }}#section_3">
                        <span class="rolling-text">NOSSAS SOLUÇÕES</span>
                    </a>
                    </li>
                    <li>
                        <a class="main click-scroll" href="{{ url('/') }}#section_10">
                            <span class="rolling-text">BLOG</span>
                        </a>
                    </li>
                    <li>
                        <a class="main click-scroll" href="{{ url('/') }}#section_8">
                            <span class="rolling-text">CONTATO</span>
                        </a>
                    </li>
                    <li class="has-droupdown">
                        <a class="main" href="#">
                            <span class="rolling-text">ÁREA DO CLIENTE</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{ route('appoinment') }}">Serviço Personalizado</a></li>
                            <li><a href="{{ route('projects-details-2') }}">Projetos Realizados</a></li>
                            <li><a href="{{ route('team-details') }}">Detalhes da Equipe</a></li>
                            {{-- <li><a href="{{ route('pricing') }}">Preços</a></li> --}}
                            <li><a href="{{ route('faq') }}">FAQ</a></li>
                        </ul>
                    </li>
                <li>
                    <a class="main click-scroll" href="{{ url('/') }}#section_7">
                        <span class="rolling-text">LOGIN</span>
                    </a>
                </li>
                    {{-- <li>
                        <a href="{{ route('contact') }}" class="main">Contact Us</a>
                    </li> --}}
                </ul>
            </nav>
        </div>
        <!-- mobile menu area end -->
</div>
    <!-- tpm-header-area end -->
