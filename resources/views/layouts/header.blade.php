@php
$lang2 = LaravelLocalization::getCurrentLocale() == 'ar' ? 'en' : 'ar';
@endphp

<header class="wrapper">
    <nav id="main_nav" class="container">
        <input type="checkbox" id="show-search">
        <input type="checkbox" id="show-menu">
        <label for="show-menu" class="menu-icon"><a href="/"><img src="{{ asset('img/mobile-logo.png') }}"
                    id="mobile_header_logo" alt="Logo"></a></a><img src="{{ asset('img/burger.png') }}"
                class="burger" alt="burger"></a></label>

        <div class="content">
            <div class="logo">
                <a href="/"><img src="{{ asset('img/header-logo.png') }}" alt="Logo"></a>
            </div>
        </div>

        <div class="content">
            <ul class="links">
                <li> <a href="/">Home</a> </li>
                <li> <a href="#products">About</a></li>
                <li> <a href="#contact">Vision</a></li>
                <li> <a href="#contact">Values</a></li>
                <li> <a href="#contact">Targets</a></li>
                <li> <a href="#contact">Services</a></li>
                <li> <a href="#contact">News</a></li>
                <li> <a href="#contact">Gallery</a></li>
                <li> <a href="#contact">Contact</a></li>
                <li> <a href="{{ LaravelLocalization::getLocalizedURL($lang2, null, [], true) }}"><img
                            src="{{ asset('img/ar.png') }}" alt="lang-icon"></a></li>
            </ul>
        </div>
    </nav>
</header>
