@extends('app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/' . LaravelLocalization::getCurrentLocale() . '-style.css') }}">
@stop

@section('main')
    <section class="hero">
        <div class="section-carousel">
            <div class="carousel-single owl-carousel owl-drag owl-theme">

                <div class="carousel-item" style="background-image: url(/img/hero-1.png); @media (max-width:768px){background-image: url(/img/hero-mob-1.png);} ">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center text-white">
                                <h1 class="slider-text">{{ __('index.10') }} <Br> {{ __('index.11') }}</h1>
                                <a href="/contact-us" class="slider-button">{{ __('index.12') }}</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" style="background-image: url(/img/hero-2.png);@media (max-width:768px){background-image: url(/img/hero-mob-2.png);}  ">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center text-white">
                                <h1 class="slider-text">{{ __('index.10') }} <Br> {{ __('index.11') }}</h1>
                                <a href="#about_us" class="slider-button">{{ __('index.2') }}</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="carousel-item" style="background-image: url(/img/hero-4.png);@media (max-width:768px){background-image: url(/img/hero-mob-3.png);}  ">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center text-white">
                                <h1 class="slider-text">{{ __('index.10') }} <Br> {{ __('index.11') }}
                                </h1>
                                <a href="#investments" class="slider-button">{{ __('index.3') }}</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="hero-div" data-aos="fade-up" data-aos-duration="500">
            <div class="opening-hours">
                <div class="content">
                    <p>{{ __('index.13') }}</p>
                    <h3>{{ __('index.14') }}</h3>
                    <div class="spans">
                        <span>{{ __('index.15') }}</span><span>{{ __('index.16') }}</span>
                    </div>

                </div>
            </div>
            <div class="logo-image">
                <img src="{{ asset('img/logo.svg') }}" alt="Logo">
            </div>
            <div class="unified-number">
                <div class="content">
                    <p>{{ __('index.17') }}</p>
                    <div class="phone-num"><img src="{{ asset('img/phone-icon.svg') }}" alt="phone-icon">0123456789</div>
                    <span>
                        {{ __('index.18') }}
                    </span>
                </div>

            </div>
        </div>
    </section>

    {{-- About Us --}}
    <section class="about-us" id="about_us">
        <div class="container">
            <div class="row">
                <div class="col-md-5 image-content" data-aos="fade-right" data-aos-duration="1000">
                    <img src="{{ asset('img/about-image.png') }}" alt="about-us">
                </div>
                <div class="col-md-7 text-content" data-aos="fade-left" data-aos-duration="1000">
                    <h2>{{ __('index.19') }}</h2>
                    <p>
                        <img src="{{ asset('img/about-image.png') }}" alt="about-us" id="about_mobile_image">
                        {{ __('index.20') }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- Vision-Section --}}
    <section class="vision-message">
        <div class="container">
            <div class="row">
                <div class="col-md-10 text-content">
                    <h3 data-aos="fade-up" data-aos-duration="1000">{{ __('index.21') }}</h3>
                    <p data-aos="fade-up" data-aos-duration="1000">{{ __('index.22') }}</p>
                    <h3 data-aos="fade-up" data-aos-duration="1000">{{ __('index.23') }}</h3>
                    <p data-aos="fade-up" data-aos-duration="1000">{{ __('index.24') }}</p>
                </div>
                <div class="col-md-2 image-content">
                    {{-- <img src="{{asset('img/logo.svg')}}" alt="logo"> --}}
                </div>
            </div>
        </div>
    </section>

    {{-- Values --}}
    <section class="values">
        <div class="container">
            <div class="row">
                <div class="col-5 image-content" data-aos="fade-right" data-aos-duration="1000">
                    <img src="{{ asset('img/values-image-'.LaravelLocalization::getCurrentLocale().'.png') }}" alt="about-us">
                </div>
                <div class="col-7 text-content" data-aos="fade-left" data-aos-duration="1000">
                    <h2>{{ __('index.25') }}</h2>
                    <p>
                        {{ __('index.26') }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- Targets --}}
    <section class="targets">
        <div class="container">
            <div class="row">

                <div class="col-8 text-content">
                    <h2 data-aos="zoom-in" data-aos-duration="1000">{{ __('index.27') }}</h2>
                    <ul>
                        <li data-aos="fade-up" data-aos-duration="1000"><img src="{{ asset('img/bullet.png') }}" alt="bullet">{{ __('index.28') }}</li>
                        <li data-aos="fade-up" data-aos-duration="1000"><img src="{{ asset('img/bullet.png') }}" alt="bullet">{{ __('index.29') }}</li>
                        <li data-aos="fade-up" data-aos-duration="1000"><img src="{{ asset('img/bullet.png') }}" alt="bullet">{{ __('index.30') }}</li>
                        <li data-aos="fade-up" data-aos-duration="1000"><img src="{{ asset('img/bullet.png') }}" alt="bullet">{{ __('index.31') }}</li>
                    </ul>
                </div>

                <div class="col-4 image-content" data-aos="zoom-out" data-aos-duration="1000">
                    <img src="{{ asset('img/targets-image.png') }}" alt="about-us">
                </div>
            </div>
        </div>
    </section>
    <section class="how-jana">
        <div class="container">
            <div class="title" data-aos="zoom-in" data-aos-duration="1000"><h2>{{ __('index.32') }}</h2></div>
            <div class="boxes">
                <div class="box box-1" data-aos="fade-up" data-aos-duration="1000">
                    <p>
                        {{ __('index.33') }}
                    </p>
                </div>
                <div class="box box-2" data-aos="fade-up" data-aos-duration="1000">
                    <p>
                        {{ __('index.34') }}
                    </p>
                </div>
            </div>
            <div class="boxes-1" data-aos="fade-up" data-aos-duration="1000">
                <div class="box">
                    <p>
                        {{ __('index.35') }}
                    </p>
                </div>
            </div>

            <div class="boxes" data-aos="fade-up" data-aos-duration="1000">
                <div class="box box-1">
                    <p>
                        {{ __('index.36') }}
                    </p>
                </div>
                <div class="box box-2">
                    <p>
                        {{ __('index.37') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Services --}}
    <section class="services" id="services">
        <div class="container">
            <div class="row">

                <div class="col-md-7 col-10 text-content" data-aos="fade-left" data-aos-duration="1000">
                    <h2>{{ __('index.38') }}</h2>
                    <p>
                        {{ __('index.39') }}
                        <br>
                        {{ __('index.40') }}
                    </p>
                </div>

                <div class="col-md-5 col-2 image-content" data-aos="fade-right" data-aos-duration="1000">
                    <img src="{{ asset('img/services-image.png') }}" alt="services-us">
                </div>

            </div>
        </div>
    </section>

    {{-- Investment --}}
    <section class="investment" id="investments">
        <div class="container">
            <div class="row">
                <div class="col-md-5 image-content" data-aos="fade-left" data-aos-duration="1000">
                    <img src="{{ asset('img/investment-image.png') }}" alt="investment">
                </div>
                <div class="col-md-7 text-content" data-aos="fade-right" data-aos-duration="1000">
                    <img src="{{ asset('img/investment-image.png') }}" id="investment_mobile_image" alt="investment">
                    <h2>{{ __('index.41') }}</h2>
                    <p>{{ __('index.42') }} </p>
                    <p>{{ __('index.43') }}</p>
                </div>
            </div>
            <p data-aos="fade-up" data-aos-duration="1000">{{ __('index.44') }}</p>
        </div>
    </section>

    {{-- Our Success Investments --}}
    <section class="our-success-investments">
        <div class="container">
            <div class="title" data-aos="fade-up" data-aos-duration="1000">
                <h2>{{ __('index.45') }}</h2>
            </div>
            <div class="cards">
                <div class="card" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="{{ asset('img/investment-image-1.png') }}" class="investment-logo" alt="investment-image-1">
                    <p> {{ __('index.53') }}</p><a href="/investments">{{ __('index.51') }} <img src="{{ asset('img/arrow.svg') }}" alt="Arrow"></a>
                </div>
                <div class="card"  data-aos="zoom-in" data-aos-duration="1000">
                    <img src="{{ asset('img/investment-image-2.png') }}" class="investment-logo"  alt="investment-image-2">
                    <p>{{ __('index.55') }}</p><a href="/investments">{{ __('index.51') }} <img src="{{ asset('img/arrow.svg') }}" alt="Arrow"></a>
                </div>
                <div class="card"  data-aos="zoom-in" data-aos-duration="1000">
                    <img src="{{ asset('img/investment-image-3.png') }}" class="investment-logo" alt="investment-image-3">
                    <p>{{ __('index.57') }}</p><a href="/investments">{{ __('index.51') }} <img src="{{ asset('img/arrow.svg') }}" alt="Arrow"></a>
                </div>
                <div class="card"  data-aos="zoom-in" data-aos-duration="1000">
                    <img src="{{ asset('img/investment-image-4.png') }}" class="investment-logo" alt="investment-image-4">
                    <p>{{ __('index.59') }}</p><a href="/investments">{{ __('index.51') }} <img src="{{ asset('img/arrow.svg') }}" alt="Arrow"></a>
                </div>
                <div class="card"  data-aos="zoom-in" data-aos-duration="1000">
                    <img src="{{ asset('img/investment-image-5.png') }}" class="investment-logo" alt="investment-image-5">
                    <p>{{ __('index.61') }}</p><a href="/investments">{{ __('index.51') }} <img src="{{ asset('img/arrow.svg') }}" alt="Arrow"></a>
                </div>
            </div>
        </div>
    </section>
@stop
