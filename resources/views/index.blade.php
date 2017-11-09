@extends('layouts.landing-page')

@section('content')

    <header class="masthead text-center text-white d-flex" style="background-image: url('{{ asset("img/homeImage/header.jpg")}}')">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1 class="text-uppercase">
                    <!-- Headline/motto company -->
                    <strong>{{ $post->headline }}</strong>
                </h1>
                <hr>
            </div>
            <div class="col-lg-8 mx-auto">
                <!-- Explain a bit about company motto/headline -->
                <p class="text-faded mb-5">{{ $post->headline_brief }}</p>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
            </div>
        </div>
    </div>
    </header>

    <section class="bg-primary" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading text-white">We've got what you need!</h2>
                <hr class="light my-4">
                <!-- Explain a bit about company's services -->
                <p class="text-faded mb-4">{{ $post->services_brief }}</p>
                <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
            </div>
        </div>
    </div>
    </section>

    <section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">At Your Service</h2>
            <hr class="my-4">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
                    <!-- Company expertise -->
                    {{-- <h3 class="mb-3">Sturdy Templates</h3> --}}
                    <p class="text-muted mb-0">{{ $post->service_1 }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
                    <!-- Company expertise -->
                    {{-- <h3 class="mb-3">Ready to Ship</h3> --}}
                    <p class="text-muted mb-0">{{ $post->service_2 }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
                    <!-- Company expertise -->
                    {{-- <h3 class="mb-3">Up to Date</h3> --}}
                    <p class="text-muted mb-0">{{ $post->service_3 }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
                    <!-- Company expertise -->
                    {{-- <h3 class="mb-3">Made with Love</h3> --}}
                    <p class="text-muted mb-0">{{ $post->service_4 }}</p>
                </div>
            </div>
        </div>
    </div>
    </section>

    <section class="bg-dark text-white">
    <div class="container text-center">
        <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
        <a class="btn btn-light btn-xl sr-button" href="http://startbootstrap.com/template-overviews/creative/">Download Now!</a>
    </div>
    </section>

    <section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <!-- Contact Us -->
                <h2 class="section-heading">Let's Get In Touch!</h2>
                <hr class="my-4">
                <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
            </div>
        </div>
    <div class="row">
        <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>{{ $post->phone }}</p>
        </div>
        <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
                <a href="mailto:your-email@your-domain.com">{{ $post->email }}</a>
            </p>
        </div>
    </div>
    </div>
    </section>

@endsection