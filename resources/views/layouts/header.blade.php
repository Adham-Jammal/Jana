@php
$lang2 = LaravelLocalization::getCurrentLocale() == 'ar' ? 'en' : 'ar';
@endphp

<header class="wrapper">
    <nav id="main_nav" class="container">
        <input type="checkbox" id="show-search">
        <input type="checkbox" id="show-menu">
        <label for="show-menu" class="menu-icon"><a href="/"><img src="{{ asset('img/header-logo.svg') }}"
                    id="mobile_header_logo" alt="Logo"></a></a><img src="{{ asset('img/burger.png') }}"
                class="burger" alt="burger"></a></label>

        <div class="content">
            <div class="logo">
                <a href="/"><img src="{{ asset('img/header-logo.svg') }}" alt="Logo"></a>
            </div>
        </div>

        <div class="content">
            <ul class="links">
                <li> <a href="/">{{ __('index.1') }}</a> </li>
                <li> <a data-link="#about_us">{{ __('index.2') }}</a></li>
                <li> <a data-link="#investments">{{ __('index.3') }}</a></li>
                <li> <a data-link="#services">{{ __('index.4') }}</a></li>
                <li> <a data-link="#news">{{ __('index.5') }}</a></li>
                <li> <a data-link="#gallery">{{ __('index.6') }}</a></li>
                <li> <a href="/contact-us">{{ __('index.7') }}</a></li>
                <li> <a href="{{ LaravelLocalization::getLocalizedURL($lang2, null, [], true) }}"><img
                            src="{{ asset('img/'.$lang2.'.svg') }}" alt="lang-icon"></a></li>
            </ul>
        </div>
    </nav>
</header>
