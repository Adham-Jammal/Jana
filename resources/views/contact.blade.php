@extends('app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/' . LaravelLocalization::getCurrentLocale() . '-contact.css') }}">
@stop
@section('main')
    <section class="contact-boxes">
        <div class="container">
            <div class="boxes">
                <div class="box">
                    <img src="{{ asset('img/home.svg') }}" alt="home-icon">
                    <h3>{{ __('index.62') }}</h3>
                    <p>
                        Al Nafal District,
                        <br>
                        Jana Investment Holding Company
                        <br>
                        Riyadh, Saudi Arabia
                    </p>
                </div>
                <div class="box">
                    <img src="{{ asset('img/headphone-icon.svg') }}" alt="headphone-icon">
                    <h3>{{ __('index.63') }}</h3>
                    <p>
                        {{ __('index.65') }}  1234567890
                    </p>
                </div>
                <div class="box">
                    <img src="{{ asset('img/message-icon.svg') }}" alt="meassage-icon">
                    <h3>{{ __('index.64') }}</h3>
                    <p>
                        Email: info@janaholding.sa
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-7 map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3623.525097389987!2d46.655882899999995!3d24.7431792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2ee2a3f0446607%3A0xf26276486ff2996b!2sAwj%20Group%20LLC!5e0!3m2!1sen!2ssa!4v1653805099480!5m2!1sen!2ssa"
                        frameborder="0" style="border:0; width:100%" allowfullscreen=""></iframe>
                </div>
                <div class="col-6 col-md-5 form">
                    <h2>{{ __('index.73') }}</h2>
                    <p>{{ __('index.66') }}</p>
                    <form action="#">
                        <input type="text" name="name" id="name" placeholder="{{ __('index.67') }}">
                        <input type="email" name="email" id="email" placeholder="{{ __('index.68') }}">
                        <input type="text" name="" id="" placeholder="{{ __('index.69') }}">
                        <input type="number" name="phone" id="number" placeholder="{{ __('index.70') }}">
                        <textarea name="message" id="message" placeholder="{{ __('index.71') }}" cols="30" rows="10"></textarea>
                        <input type="submit" name="submit" id="submit" value="{{ __('index.72') }}">

                    </form>
                </div>
            </div>
        </div>
    </section>
@stop
