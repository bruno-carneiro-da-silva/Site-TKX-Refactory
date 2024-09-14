@extends('layouts.layout1')

@php
    $title = 'Detalhes do Projeto';
    $subtitle = 'Detalhes do Projeto';
@endphp


@section('content')

     <!-- Start Projects Details area  -->
     <div class="projects-details-area mt-dec-pd tmp-section-gap rts_jump_counter__animation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="projects-details-inner">
                        <div class="thumbnail grow position-relative">
                            <img src="{{ asset('assets/images/projects-details/projects-details.jpg') }}" alt="projects-details">
                        </div>
                        <div class="clients-projects-details">
                            <div class="clients-details-inner">
                                <h3 class="title text-center">DETALHES DO CLIENTE</h3>
                                <div class="single-projects-details">

                                    <div class="info">
                                        <div class="icon">
                                            <i class="fa-solid fa-user"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="subtitle">Clientes:</h4>
                                            <h5 class="category">Alex Brands</h5>
                                        </div>

                                    </div>

                                    <div class="info">
                                        <div class="icon">
                                            <i class="fa-sharp fa-light fa-layer-group"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="subtitle">Categoria:</h4>
                                            <h5 class="category">TKX Truck</h5>
                                        </div>

                                    </div>

                                    <div class="info">
                                        <div class="icon">
                                            <i class="fa-light fa-calendar-days"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="subtitle">Data:</h4>
                                            <h5 class="category">05 Maio 2023</h5>
                                        </div>

                                    </div>

                                    <div class="info">
                                        <div class="icon">
                                            <i class="fa-regular fa-map-location"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="subtitle">Endereço:</h4>
                                            <h5 class="category">+880123456678</h5>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="projects-details-wrapper">
                                <h3 class="title">Gerenciamento de Risco & Frota</h3>
                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus, dolor eget viverra pretium, dolor tellus aliquet nunc, vitae ultricies erat elit eu lacus. Vestibulum non justo consectetur, cursus ante, tincidunt sapien. Nulla quis diam sit amet turpis interdum accumsan quis nec enim. Vivamus faucibus ex sed nibh egestas elementum. Mauris et bibendum dui. Aenean consequat pulvinar luctus. Suspendisse consectetur tristique tortorLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus, dolor eget viverra pretium, dolor tellus aliquet nunc, vitae ultricies erat elit eu lacus.</p>

                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus, dolor eget viverra pretium, dolor tellus aliquet nunc, vitae ultricies erat elit eu lacus. Vestibulum non justo consectetur, cursus ante, tincidunt sapien. Nulla quis diam sit amet turpis interdum.
                                </p>
                            </div>

                            <div class="projects-details-wrapper">
                                <h3 class="title">Desafio do projeto</h3>
                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus, dolor eget viverra pretium, dolor tellus aliquet nunc, vitae ultricies erat elit eu lacus. Vestibulum non justo consectetur, cursus ante, tincidunt sapien. Nulla quis diam sit amet turpis interdum accumsan quis nec enim. Vivamus faucibus ex sed nibh egestas elementum. Mauris et bibendum dui. Aenean consequat pulvinar luctus.</p>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="challenge-details">
                                            <div class="icon"><i class="fa-solid fa-check"></i></div>
                                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate </p>
                                        </div>
                                        <div class="challenge-details">
                                            <div class="icon"><i class="fa-solid fa-check"></i></div>
                                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate </p>
                                        </div>


                                        <div class="challenge-details">
                                            <div class="icon"><i class="fa-solid fa-check"></i></div>
                                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate </p>
                                        </div>


                                    </div>

                                    <div class="col-lg-6">
                                        <div class="challenge-details">
                                            <div class="icon"><i class="fa-solid fa-check"></i></div>
                                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate </p>
                                        </div>
                                        <div class="challenge-details">
                                            <div class="icon"><i class="fa-solid fa-check"></i></div>
                                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate </p>
                                        </div>


                                        <div class="challenge-details">
                                            <div class="icon"><i class="fa-solid fa-check"></i></div>
                                            <p class="description">Lorem ipsum dolor sit amet, consectetur </p>
                                        </div>
                                    </div>


                                </div>

                                <p class="description mt--30">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus, dolor eget viverra pretium, dolor tellus aliquet nunc, vitae ultricies erat elit eu lacus. Vestibulum non justo consectetur, cursus ante, tincidunt sapien. Nulla quis diam sit amet turpis interdum accumsan quis nec enim. Vivamus faucibus ex sed nibh egestas elementum. Mauris et bibendum dui. Aenean consequat pulvinar luctus. Suspendisse consectetur tristique tortorLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus, dolor eget viverra pretium, dolor tellus aliquet nunc, vitae ultricies erat elit eu lacus. Vestibulum non justo consectetur, cursus ante, tincidunt sapien.
                                </p>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="thumbnail">
                                            <img src="{{ asset('assets/images/projects-details/challen-1.jpg') }}" alt="project details">
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">

                                        <div class="thumbnail">
                                            <img src="{{ asset('assets/images/projects-details/challen-2.jpg') }}" alt="project details">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Projects Details area  -->

@endsection
