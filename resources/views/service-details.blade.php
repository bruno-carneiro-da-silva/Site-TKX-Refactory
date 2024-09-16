@extends('layouts.layout1')

@php
    $bodyClass='service-details';
    $title = 'Detalhes do serviço';
    $subtitle = 'Detalhes do serviço';
@endphp


@section('content')

    <!-- tmp service section -->
    <div class="tmp-service-section tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tmp-large-service-detials">
                        <img src="{{ asset('assets/images/services/details-large.png') }}" alt="corporate_business_details">
                    </div>
                    <!-- single service details component -->
                    <div class="single-service-details-component mt--40">
                        <h2 class="title split-collab">Lorem ipsum dolor sit amet</h2>
                        <p class="disc mb--20">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae rerum officiis debitis modi, aliquid perferendis. Dolore sit nostrum doloribus deserunt suscipit eligendi numquam! Totam laborum, in aliquid illum nisi iusto..
                        </p>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <!-- chck-area-wrapper -->
                                <div class="check-service-wrapper">
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        <p>Lorem ipsum dolor sit amet</p>
                                    </div>
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        <p>Lorem ipsum dolor sit</p>
                                    </div>
                                </div>
                                <!-- chck-area-wrapper end -->
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <!-- chck-area-wrapper -->
                                <div class="check-service-wrapper">
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        <p>Lorem ipsum dolor sit amet</p>
                                    </div>
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        <p>2Lorem ipsum dolor sit amet</p>
                                    </div>
                                </div>
                                <!-- chck-area-wrapper end -->
                            </div>
                        </div>
                    </div>
                    <!-- single service details component end -->
                    <div class="row g-5 mt--10">
                        <div class="col-lg-6 col-md-6">
                            <!-- single service large-details -->
                            <div class="single-service-details">
                                <div class="icon">
                                    <img class="text-primary" src="{{ asset('assets/images/services/details-1.png') }}" alt="corporate_business_details" style="filter: grayscale(100%) brightness(0%);">
                                </div>
                                <div class="information">
                                    <h6 class="title">Crescimento do Negócio</h6>
                                    <p class="disc">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incididunt ut labore.
                                    </p>
                                </div>
                            </div>
                            <!-- single service large-details end -->
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <!-- single service large-details -->
                            <div class="single-service-details">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/services/details-2.png') }}" alt="corporate_business_details" style="filter: grayscale(100%) brightness(0%);">
                                </div>
                                <div class="information">
                                    <h6 class="title">Planejamento Financeiro</h6>
                                    <p class="disc">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incididunt ut labore.
                                    </p>
                                </div>
                            </div>
                            <!-- single service large-details end -->
                        </div>
                    </div>
                    <div class="row g-5 mt--10">
                        <div class="col-lg-12">
                            <h2 class="title split-collab">Case do problema</h2>
                            <p class="disc mb--20">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, eius hic harum natus cum doloremque aspernatur velit tempora minus neque aperiam nostrum totam animi et vero voluptatem, tenetur sed id?.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <div class="thumbnail-service-details">
                                <img src="{{ asset('assets/images/services/details-thumb-1.png') }}" alt="Corporate_Business">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="service-detials-thumb-details">
                                <p class="itelic disc">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incididunt ut labore.
                                </p>
                                <div class="single-check">
                                    <i class="fa-light fa-circle-check"></i>
                                    <p>Lorem ipsum dolor sit </p>
                                </div>
                                <div class="single-check">
                                    <i class="fa-light fa-circle-check"></i>
                                    <p>Lorem ipsum dolor sit </p>
                                </div>
                                <div class="single-check">
                                    <i class="fa-light fa-circle-check"></i>
                                    <p>Lorem ipsum dolor sit </p>
                                </div>
                                <div class="single-check">
                                    <i class="fa-light fa-circle-check"></i>
                                    <p>Lorem ipsum dolor sit </p>
                                </div>
                                <div class="single-check">
                                    <i class="fa-light fa-circle-check"></i>
                                    <p>Lorem ipsum dolor sit </p>
                                </div>
                                <div class="single-check">
                                    <i class="fa-light fa-circle-check"></i>
                                    <p>Lorem ipsum dolor sit </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <p class="disc">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto iste omnis officiis exercitationem, a voluptatum maxime laudantium ratione totam. Esse fugit tempora ut dolore, sed nesciunt repellat doloribus expedita dolorem?.
                            </p>
                        </div>
                    </div>
                    <div class="row mt--40">
                        <div class="col-lg-12">
                            <div class="faq-accordion">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingOne">
                                            <div class="accordion-button" data-bs-toggle="collapse" role="button" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                                                <div class="accordion-button-left">
                                                    <i class="fa-regular fa-question"></i>
                                                    <span>Existe alguma frequência mínima de viagens que devo fazer?</span>
                                                </div>
                                                <div class="accordion-button-right">
                                                    <i class="fa-sharp fa-light fa-arrow-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae corporis incidunt ad illo exercitationem voluptates, dicta earum ratione sapiente recusandae eius distinctio quis impedit iste ipsum quidem natus autem voluptatibus..
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingTwo">
                                            <div class="accordion-button collapsed" data-bs-toggle="collapse" role="button" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <div class="accordion-button-left">
                                                    <i class="fa-regular fa-question"></i>
                                                    <span>Tenho um caminhão próprio, posso me tornar um motorista de carga também?</span>
                                                </div>
                                                <div class="accordion-button-right">
                                                    <i class="fa-sharp fa-light fa-arrow-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id deleniti ipsum asperiores natus eum minus nesciunt quae, quisquam quasi. Rem quidem quo ipsam nam atque doloremque repellendus eum, quas dicta?.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingThree">
                                            <div class="accordion-button collapsed" data-bs-toggle="collapse" role="button" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <div class="accordion-button-left">
                                                    <i class="fa-regular fa-question"></i>
                                                    <span>Como é dirigir pelo app da TKX comparado com outros apps?</span>
                                                </div>
                                                <div class="accordion-button-right">
                                                    <i class="fa-sharp fa-light fa-arrow-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil provident, eius optio atque in doloribus fugit debitis tempore illo quaerat minus magnam, aperiam omnis et incidunt numquam sapiente doloremque qui!.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="faq-buttom">
                                    <h4 class="title">Ainda com dúvidas?
                                    </h4>
                                    <p>Entre em contato com <a href="#">Nosso Suporte</a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pl--50 pl_md--15 pl_sm--10 mt_md--50 mt_sm--50">
                    <div class="side-bar-details-page">
                        <!-- single bar -->
                        <div class="signle-side-bar search-area">
                            {{-- <div class="body">
                                {{-- <div class="search-area">
                                    <input type="text" placeholder="Entry Key">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div> --}}
                            {{-- </div> --}}
                        </div>
                        <!-- single bar end -->
                        <!-- single bar -->
                        <div class="signle-side-bar category-area">
                            <div class="header">
                                <h3 class="title">Lista de Categoria</h3>
                            </div>
                            <div class="body">
                                <!-- single category -->
                                <a href="#" class="single-category">
                                    <p>Soluções de Negócios</p>
                                    <i class="fa-light fa-arrow-right"></i>
                                </a>
                                <!-- single category end -->
                                <!-- single category -->
                                <a href="#" class="single-category">
                                    <p>Estratégia de Crescimento</p>
                                    <i class="fa-light fa-arrow-right"></i>
                                </a>
                                <!-- single category end -->
                                <!-- single category -->
                                <a href="#" class="single-category">
                                    <p>Gestão de Frota</p>
                                    <i class="fa-light fa-arrow-right"></i>
                                </a>
                                <!-- single category end -->
                                <!-- single category -->
                                <a href="#" class="single-category">
                                    <p>Gestão de Rastreio</p>
                                    <i class="fa-light fa-arrow-right"></i>
                                </a>
                                <!-- single category end -->
                                <!-- single category -->
                                <a href="#" class="single-category">
                                    <p>Gerenciamento de Tracking</p>
                                    <i class="fa-light fa-arrow-right"></i>
                                </a>
                                <!-- single category end -->
                            </div>
                        </div>
                        <!-- single bar end -->
                        <!-- single bar -->
                        <div class="signle-side-bar call-to-action">
                            <div class="easy-call-to-action">
                                <div class="icon-center-call">
                                    <i class="fa-light fa-phone"></i>
                                </div>
                                <h3 class="title">Precisa de ajuda?</h3>
                                <p class="disc">
                                    Estamos aqui para ajudar nosso cliente a qualquer momento. Você pode ligar 24 horas por dia, 7 dias por semana para responder à sua pergunta.
                                </p>
                                <a href="#">+55 (35) 99974660</a>
                            </div>
                        </div>
                        <!-- single bar end -->
                        <!-- single bar -->
                        <div class="signle-side-bar brochure">
                            <div class="header">
                                <h3 class="title">Folheto</h3>
                            </div>
                            <div class="body">
                                <!-- single category -->
                                <a href="#" class="single-brocher">
                                    <p>Politica de Investimento</p>
                                    <i class="fa-light fa-cloud-arrow-down"></i>
                                </a>
                                <!-- single category end -->
                                <!-- single category -->
                                <a href="#" class="single-brocher">
                                    <p>Detalhes da Empresa</p>
                                    <i class="fa-light fa-note"></i>
                                </a>
                                <!-- single category end -->
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
