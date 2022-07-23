@extends('app')

@section('main')
    <section class="hero">
        <div class="section-carousel">
            <div class="carousel-single owl-carousel owl-drag owl-theme">

                <div class="carousel-item" style="background-image: url(/img/hero-1.png); ">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center text-white">
                                <h1 class="slider-text"><strong>Achieving <Br> Sustainable Value</strong></h1>
                                <a href="#" class="slider-button">Contact Us Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" style="background-image: url(/img/hero-2.png); ">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center text-white">
                                <h1 class="slider-text"><strong>Achieving <Br> Sustainable Value</strong></h1>
                                <a href="#" class="slider-button">Contact Us Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" style="background-image: url(/img/hero-3.png); ">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center text-white">
                                <h1 class="slider-text"><strong>Achieving <Br> Sustainable Value</strong></h1>
                                <a href="#" class="slider-button">Contact Us Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" style="background-image: url(/img/hero-4.png); ">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center text-white">
                                <h1 class="slider-text"><strong>Achieving <Br> Sustainable Value</strong></h1>
                                <a href="#" class="slider-button">Contact Us Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" style="background-image: url(/img/hero-5.png); ">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center text-white">
                                <h1 class="slider-text"><strong>Achieving <Br> Sustainable Value</strong></h1>
                                <a href="#" class="slider-button">Contact Us Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" style="background-image: url(/img/hero-6.png); ">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center text-white">
                                <h1 class="slider-text"><strong>Achieving <Br> Sustainable Value</strong></h1>
                                <a href="#" class="slider-button">Contact Us Now</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="hero-div">
            <div class="opening-hours">
                <div class="content">
                    <p>Opening Hours</p>
                    <h3>General Administration</h3>
                    <div class="spans">
                        <span>Sun - Thu</span><span>9:00 AM to 5:00 Pm</span>
                    </div>

                </div>
            </div>
            <div class="logo-image">
                <img src="{{ asset('img/logo.png') }}" alt="Logo">
            </div>
            <div class="unified-number">
                <div class="content">
                    <p>Unified Number</p>
                    <div class="phone-num"><i>-</i>0123456789</div>
                    <span>We are here for you.You can always
                        contact us on our Unified phone
                        Number we have put for your comfort
                    </span>
                </div>

            </div>
        </div>
    </section>

    {{-- About Us --}}
    <section class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-5 image-content">
                    <img src="{{ asset('img/about-image.png') }}" alt="about-us">
                </div>
                <div class="col-md-7 text-content">
                    <h2>About Us</h2>
                    <p>
                        <img src="{{ asset('img/about-image.png') }}" alt="about-us" id="about_mobile_image">
                        The most important factors to reach a prestigious because ambition and credibility is one of place
                        in business world.
                        Jana Investment Holding Company since it was established at 2018 is seeking to write its name in the
                        record of leadership and investment in various fields, as it started its business according to
                        strong foundations, distinguished experiences, culture, and high professionalism, through which many
                        various companies have grown holding its responsibility towards our dear beloved country, society
                        and its institutions, surrounding environment, and that was all by following Saudi laws and
                        regulations.
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
                    <h3>Vision</h3>
                    <p>Our vision is to be the first to rise the value of the local market globally, and to give a renewal
                        view to investment holding companies according to long-term goals and plans, through diversification
                        and sustainability at the local level to be an efficient partner in the kingdom's vision of year
                        2030.</p>
                    <h3>Message</h3>
                    <p>Our vision is to be the first to rise the value of the local market globally, and to give a renewal
                        view to investment holding companies according to long-term goals and plans, through diversification
                        and sustainability at the local level to be an efficient partner in the kingdom's vision of year
                        2030.</p>
                </div>
                <div class="col-md-2 image-content">
                    {{-- <img src="{{asset('img/logo.png')}}" alt="logo"> --}}
                </div>
            </div>
        </div>
    </section>

    {{-- Values --}}
    <section class="values">
        <div class="container">
            <div class="row">
                <div class="col-5 image-content">
                    <img src="{{ asset('img/values-image.png') }}" alt="about-us">
                </div>
                <div class="col-7 text-content">
                    <h2>Values</h2>
                    <p>
                        There is no doubt that the values upon which the companies are established determine their
                        continuity and its presence in the business market.
                        Therefore, we put in Jana real estate investment company number of values that cannot be crossed
                        over as if it is the road map on which we build our investment strategy.
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
                    <h2>Targets</h2>
                    <ul>
                        <li><img src="{{ asset('img/bullet.png') }}" alt="bullet">An Adopting accuracy, quality and
                            honesty in business, which is the foundation of building a community that believes in progress
                            and development.</li>
                        <li><img src="{{ asset('img/bullet.png') }}" alt="bullet">Undertake all tasks, which achieve the
                            growth of clients ' projects and companies</li>
                        <li><img src="{{ asset('img/bullet.png') }}" alt="bullet">Continues improvement of creativity and
                            innovation to come up with businesses that can compete with many international companies.</li>
                        <li><img src="{{ asset('img/bullet.png') }}" alt="bullet">Adding technical experiences,
                            encouraging personal development and sharing five opinions with all parties related to the
                            project in order to make the business perfect in all aspects.</li>
                    </ul>
                </div>

                <div class="col-4 image-content">
                    <img src="{{ asset('img/targets-image.png') }}" alt="about-us">
                </div>
            </div>
        </div>
    </section>
    <section class="how-jana">
        <div class="container">
            <h2>How Jana Investment Holding Company became distinguished</h2>
            <div class="boxes">
                <div class="box box-1">
                    <p>
                        Dynamic management from a global,
                        progressive and digital perspective
                    </p>
                </div>
                <div class="box box-2">
                    <p>
                        Strong bond of the brand and wide spread
                    </p>
                </div>
            </div>
            <div class="boxes-1">
                <div class="box">
                    <p>
                        Owning a high growing business activities and developing them to suit the
                        rapidly progress of businesses and technology
                    </p>
                </div>
            </div>

            <div class="boxes">
                <div class="box box-1">
                    <p>
                        Commitment to long-term partnerships that
                        increases the upgrading of the local market
                    </p>
                </div>
                <div class="box box-2">
                    <p>
                        Reputable global strategic alliance
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Services --}}
    <section class="services">
        <div class="container">
            <div class="row">

                <div class="col-md-7 col-10 text-content">
                    <h2>Services</h2>
                    <p>
                        Managing Subsidiaries and participating in management of other companies in which Jana Investment
                        Holding Company contributes:
                        <br>
                        Proceeding from the vision, values and message which we set in Jana Investment Holding company, we
                        put all of our experiences and creativity in leading our Subsidiaries as an integral part of our
                        company, away from routine and reputation, as we pay attention to them based on special activities
                        each company within the global standards of quality and management as well as adaptation and lining
                        up with current technological developments, and provide all the necessary support for them at all
                        material, moral and logistical levels.
                    </p>
                </div>

                <div class="col-md-5 col-2 image-content">
                    <img src="{{ asset('img/services-image.png') }}" alt="services-us">
                </div>

            </div>
        </div>
    </section>

    {{-- Investment --}}
    <section class="investment">
        <div class="container">
            <div class="row">
                <div class="col-md-5 image-content">
                    <img src="{{ asset('img/investment-image.png') }}" alt="investment">
                </div>
                <div class="col-md-7 text-content">
                    <img src="{{ asset('img/investment-image.png') }}" id="investment_mobile_image" alt="investment">
                    <h2>Investment</h2>
                    <p>
                        Jana Investment Holding Company believes in the philosophy of holistic investment that is capable of
                        managing specialized and diversed investments at the same time and in various fields, as long as
                        there is an essential link among these operations, companies and fields in which they operate in
                        various ways and conditions that help in their development and sustainability. </p>
                    <p>
                        Besides that Jana Investment Holding company is continuously striving to increase its capital
                        through multiple and various investments outlets in order to make each port achieve investment
                        growth, increase the market value of companies continuously, moreover investigating accuracy,
                        methodology and comprehensiveness in studying the investment climate, to explore the new investment
                        areas to establish new companies or the acquisition of emerging and old companies and adding them to
                        its Holding group.
                    </p>
                </div>
            </div>
            <p>Jana Investment Holding company manages all its Subsidiaries through participating in the management of the
                other companies under its umbrella by providing the necessary support by selecting leaders with
                administrative and technical competencies, according to the latest technological and digital developments,
                in addition to pumping more investments and providing financial and technical support in order to make each
                company provide the highest standards of quality, financial security and logistical support, and then
                achieving more satisfaction of employees and customers and those who have any relationship with these
                companies, which helps the public interest to increase the number of strategic partners for each company,
                and provide the latest equipment, machines and mechanisms to complete the work and the projects that
                entrusted to its companies with extreme accuracy, high quality and reliability.</p>
        </div>
    </section>

    {{-- Our Success Investments --}}
    <section class="our-success-investments">
        <div class="container">
            <div class="title">
                <h2>Our Success Investments</h2>
            </div>
            <div class="cards">
                <div class="card">
                    <img src="{{ asset('img/investment-image-1.png') }}" alt="investment-image-1">
                    <p>It's a uniform store located in Riyadh, and it relays on the finest materials and fabrics that suits
                        each work separately, such as security uniforms, school uniforms, hotel uniforms and volunteer
                        campaigns uniforms etc.... <a href="#">Read More </a> </p>
                </div>
                <div class="card">
                    <img src="{{ asset('img/investment-image-2.png') }}" alt="investment-image-2">
                    <p>Ertiqaa ALandalus marble and stone company is considered one of the specialized companies in
                        installing marble, stone, granite, porcelain work, as it includes an elite group of professionals in
                        this field, to provide the best for its clients, and professionalism in conducting its clients work
                        in sectors, government agencies,<a href="#">Read More </a> </p>
                </div>
                <div class="card">
                    <img src="{{ asset('img/investment-image-3.png') }}" alt="investment-image-3">
                    <p>Al Hadaf Company for Commercial Services is a Saudi company that manages and leases a fleet of modern
                        cars and vehicles characterized by luxury and strength of performance, where its core values are
                        driven by trust, respect, honesty and honesty, these values are embodied in the highest levels of
                        service for its customers <a href="#">Read More </a> </p>
                </div>
                <div class="card">
                    <img src="{{ asset('img/investment-image-4.png') }}" alt="investment-image-4">
                    <p>Jana medical company is a Saudi company established in the city of Riyadh which consists of a group
                        of companies united under the name (Jana medical company), it was launched in the year of 2014, and
                        one of its most prominent and largest investment is in the medical sector specifically in the field
                        of medical supplies <a href="#">Read More </a> </p>
                </div>
                <div class="card">
                    <img src="{{ asset('img/investment-image-5.png') }}" alt="investment-image-5">
                    <p>It is a logistics services company that works to create specialized and improved solutions for supply
                        chains in accordance with international and advanced programs and systems, and enjoys great
                        flexibility to face all possible operations and obstacles, through a distinguished and trained staff
                        to provide the best service to <a href="#">Read More </a> </p>
                </div>
            </div>
        </div>
    </section>
@stop
