@extends('frontend.layouts.master')


@section('contents')
    <!--  home Start  -->
    <section id="hero" class="section hero-06 active">
        <div class="display-table">
            <div class="display-content">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-2 order-lg-1">
                            <div class="hero-content">
                                <h1 class="mb-3">I'M Jessy Doe</h1>
                                <h4 class="text-capitalize mb-0"><span class="base-color">A </span> <span class="element"
                                        data-elements="UI Designer.,Web Designer.,Web Developer."></span></h4>
                                <p class="max-width-450 mx-0 my-4">In a professional context it often happens that private
                                    clients corder a publication to be made.</p>
                                <ul class="list-inline hero-social">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);">
                                            <img src="{{ asset('assets/img/facebook.svg') }}" alt="">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);">
                                            <img src="{{ asset('assets/img/twitter.svg') }}" alt="">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);">
                                            <img src="{{ asset('assets/img/github.svg') }}" alt="">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);">
                                            <img src="{{ asset('assets/img/linkedin.svg') }}" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2">
                            <div class="hero-images">
                                <div class="d-none d-xl-block">
                                    <div class="square">
                                        <img src="{{ asset('assets/img/element_square.png') }}" alt="/">
                                    </div>
                                    <div class="circle"></div>
                                    <div class="circle-2"></div>
                                    <div class="circle-3"></div>
                                    <div class="floating"></div>
                                </div>
                                <div class="rounded-circle">
                                    <img src="{{ asset('assets/img/personal-image-05.jpg') }}" alt="/"
                                        class="rounded-circle img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  home End  -->
@endsection
