@extends('layouts.layout1')

@php
    $bodyClass='faq';
    $title = 'Perguntas Frequentes';
    $subtitle = 'FAQs';
@endphp


@section('content')

<div class="tmp-section-gap tmpfaqs-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="faq-accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingOne">
                                    <div class="accordion-button" data-bs-toggle="collapse" role="button" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                                        <div class="accordion-button-left">
                                            <i class="fa-regular fa-question"></i>
                                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit?</span>
                                        </div>
                                        <div class="accordion-button-right">
                                            <i class="fa-sharp fa-light fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro expedita dolorum nemo quam odit laudantium unde laborum, explicabo eveniet amet debitis alias velit eum error quo reprehenderit quaerat quae dicta.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingTwo">
                                    <div class="accordion-button collapsed" data-bs-toggle="collapse" role="button" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <div class="accordion-button-left">
                                            <i class="fa-regular fa-question"></i>
                                            <span>Lorem ipsum dolor sit amet?</span>
                                        </div>
                                        <div class="accordion-button-right">
                                            <i class="fa-sharp fa-light fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro expedita dolorum nemo quam odit laudantium unde laborum, explicabo eveniet amet debitis alias velit eum error quo reprehenderit quaerat quae dicta.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingThree">
                                    <div class="accordion-button collapsed" data-bs-toggle="collapse" role="button" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <div class="accordion-button-left">
                                            <i class="fa-regular fa-question"></i>
                                            <span>Lorem ipsum dolor sit amet consectetur adipisicing?</span>
                                        </div>
                                        <div class="accordion-button-right">
                                            <i class="fa-sharp fa-light fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, dicta! A nulla iste debitis repudiandae deleniti. Reiciendis aspernatur facere veritatis saepe, ab voluptatum, dolor aut, in quas corrupti inventore deserunt!.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq-buttom">
                            <h4 class="title">Ainda tem dúvidas?
                            </h4>
                            <p>Fale com nosso <a href="#">Time</a></p>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>

    @endsection
