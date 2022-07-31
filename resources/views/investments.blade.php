@extends('app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/' . LaravelLocalization::getCurrentLocale() . '-investments.css') }}">
@stop
@section('main')
<section class="our-success-investments">
    <div class="container">
        <div class="cards">
            <div class="card"  data-aos="zoom-in" data-aos-duration="1000">
                <h3>{{ __('index.56') }}</h3>
                <img src="{{ asset('img/investment-image-3.png') }}" alt="investment-image-3">
                <p>{{ __('index.57') }} </p>
            </div>
            <div class="card"  data-aos="zoom-in" data-aos-duration="1000">
                <h3>{{ __('index.54') }}</h3>
                <img src="{{ asset('img/investment-image-2.png') }}" alt="investment-image-2">
                <p>{{ __('index.55') }} </p>
            </div>
            <div class="card"  data-aos="zoom-in" data-aos-duration="1000">
                <h3>{{ __('index.52') }}</h3>
                <img src="{{ asset('img/investment-image-1.png') }}" alt="investment-image-1">
                <p> {{ __('index.53') }} </p>
            </div>
            <div class="card"  data-aos="zoom-in" data-aos-duration="1000">
                <h3>{{ __('index.60') }}</h3>
                <img src="{{ asset('img/investment-image-5.png') }}" alt="investment-image-5">
                <p>{{ __('index.61') }} </p>
            </div>
            <div class="card"  data-aos="zoom-in" data-aos-duration="1000">
                <h3>{{ __('index.52') }}</h3>
                <img src="{{ asset('img/investment-image-1.png') }}" alt="investment-image-1">
                <p> {{ __('index.53.1') }} </p>
            </div>
        </div>
    </div>
</section>
@stop
