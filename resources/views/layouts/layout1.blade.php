<!DOCTYPE html>
<html lang="en">

<x-head/>

<body @php echo (isset($bodyClass) ? 'class="' . $bodyClass .'"': '');@endphp>

    <!-- tpm-header-area start -->
    <!-- tpm-header-area start -->
    <header class="tmp-header-area-start header-two header-four header--sticky">
        <!-- header-top start -->
        <div class="header-top-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-inner">
                            {{-- <div class="left-information-area">
                                <p class="left-top"><a href="tel:+553599974660"><i class="fa-regular fa-phone"></i> +55 (35) 99974660</a></p>
                                <div class="location-area">
                                    <i class="fa-light fa-location-dot"></i>
                                    <a href="#">Lavras, Minas Gerais</a>
                                </div>
                                <div class="working-time">
                                    <i class="fa-light fa-clock"></i>
                                    <p>Horários: 9:00 AM – 8:00 PM</p>
                                </div>
                            </div> --}}
                            <div class="right-header-top">
                                <div class="social-area-transparent">
                                    <span>Rede Sociais</span>
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    {{-- <a href="#"><i class="fa-brands fa-twitter"></i></a> --}}
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="https://www.instagram.com/tkxmobilidadelavras/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                    {{-- <a href="#"><i class="fa-brands fa-pinterest-p"></i></a> --}}
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
                        <div class="header-nav main-nav-one">
                            <x-menuList/>
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

     <!-- Start Breadcrumb area  -->
     <div class="breadcrumb-area bg_image tmp-section-gap breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h1 class="title split-collab">{{ $title }}</h1>
                        <ul class="page-list">
                            <li class="tmp-breadcrumb-item"><a href="/">Página inicial</a></li>
                            <li class="icon"><i class="fa-solid fa-angle-right"></i></li>
                            <li class="tmp-breadcrumb-item active">{{ $subtitle }}</li>
                        </ul>
                        <div class="circle-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb area  -->
    <!-- End Breadcrumb area  -->

    @yield('content')

    <x-footer/>

    <div id="overlay_every-where" data-tmp-cursor="md text-black dark:text-white opacity-10" data-tmp-cursor-icon="fa-regular fa-x fa-fw"></div>

    <x-loader/>

   <x-scripts/>

</body>

</html>
