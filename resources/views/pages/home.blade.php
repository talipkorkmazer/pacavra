@extends('layouts.default')
@section('content')
    <!-- Home Section -->
    <section class="home-section parallax-5"
             data-background="{{ asset('public/public/images/pacavra/IMG-20181023-WA0002.jpg') }}" id="home">
        <div class="container min-height-100vh d-flex align-items-center pt-100 pb-100">

            <!-- Hero Content -->
            {{--<div class="home-content">
                <div class="wow fadeInUpShort" data-wow-delay=".1s">
                    <h1 class="hs-line-1 opacity-085 mb-70 mb-sm-40">The Design Makers</h1>
                </div>
                <div class="wow fadeInUpShort" data-wow-delay=".2s">
                    <p class="hs-line-6 opacity-07">
                        Extraordinary design & development studio
                    </p>
                </div>
            </div>--}}
            <!-- End Hero Content -->

            <!-- Scroll Down -->
            <div class="local-scroll scroll-down-wrap wow fadeInUpShort" data-wow-offset="0">
                <a href="#about" class="scroll-down opacity-085"><i class="scroll-down-icon"></i><span class="sr-only">Scroll to the next section</span></a>
            </div>
            <!-- End Scroll Down -->

        </div>
    </section>
    <!-- End Home Section -->

    <!-- About Section -->
    {{--<section class="page-section" id="about">
        <div class="container relative">

            <div class="mb-140 mb-sm-70">
                <div class="row section-text">

                    <div class="col-md-12 col-lg-4 mb-md-50 mb-xs-30">
                        <div class="lead-alt wow linesAnimIn" data-splitting="lines">
                            Our mission is to make design simple and useful.
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-sm-50 mb-xs-30 wow linesAnimIn" data-splitting="lines">
                        Lorem ipsum dolor sit amet conseur adipisci inerene maximus ligula sempe metuse pelente mattis. Maecenas volutpat, diam eni sagittise quame porta quam. Sed id dolor consectetur fermentum volutpat accumsan purus.
                    </div>

                    <div class="col-md-6 col-lg-4 mb-sm-50 mb-xs-30 wow linesAnimIn" data-splitting="lines">
                        Etiam sit amet fringilla lacus susantebe sit ullamcorper pulvinar neque porttitor. Integere lectus. Praesent sede nisi eleifend fermum orci amet, iaculis libero. Donec vel ultricies purus. Name dictum sem ipsumebe euliquam.
                    </div>

                </div>
            </div>

            <div class="row">

                <!-- Team item -->
                <div class="col-md-4 mb-xs-30">
                    <div class="team-item-wrap wow fadeInUp" data-wow-delay=".1s" data-wow-duration="1.2s">
                        <div class="team-item-decoration" style="background-image: url({{ asset('public/public/images/team/team-decoration-1.jpg') }});"></div>
                        <div class="team-item">
                            <div class="team-item-image">
                                <img src="{{ asset('public/public/images/team/team-1.jpg') }}" alt="" />
                                <div class="team-item-detail">
                                    <p class="team-item-detail-title">
                                        Hello & Welcome!
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&nbsp;iaculis diam.
                                    </p>
                                    <div class="team-social-links">
                                        <a href="#" target="_blank"><i class="fab fa-facebook"></i><span class="sr-only">Facebook profile</span></a>
                                        <a href="#" target="_blank"><i class="fab fa-twitter"></i><span class="sr-only">Twitter profile</span></a>
                                        <a href="#" target="_blank"><i class="fab fa-pinterest"></i><span class="sr-only">Pinterest profile</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item-descr">
                                <div class="team-item-name">
                                    Tomas Maller
                                </div>
                                <div class="team-item-role">
                                    Art director
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Team item -->

                <!-- Team item -->
                <div class="col-md-4 mb-xs-30">
                    <div class="team-item-wrap wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.2s">
                        <div class="team-item-decoration" style="background-image: url({{ asset('public/public/images/team/team-decoration-2.jpg') }});"></div>
                        <div class="team-item">
                            <div class="team-item-image">
                                <img src="{{ asset('public/public/images/team/team-2.jpg') }}" alt="" />
                                <div class="team-item-detail">
                                    <p class="team-item-detail-title">
                                        Nice to meet!
                                    </p>
                                    <p>
                                        Curabitur augue, nec finibus mauris pretium eu. Duis placerat ex gravida nibh tristique porta.
                                    </p>
                                    <div class="team-social-links">
                                        <a href="#" target="_blank"><i class="fab fa-facebook"></i><span class="sr-only">Facebook profile</span></a>
                                        <a href="#" target="_blank"><i class="fab fa-twitter"></i><span class="sr-only">Twitter profile</span></a>
                                        <a href="#" target="_blank"><i class="fab fa-pinterest"></i><span class="sr-only">Pinterest profile</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item-descr">
                                <div class="team-item-name">
                                    Steeve Anders
                                </div>
                                <div class="team-item-role">
                                    Product designer
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Team item -->

                <!-- Team item -->
                <div class="col-md-4 mb-xs-30">
                    <div class="team-item-wrap wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1.2s">
                        <div class="team-item-decoration" style="background-image: url({{ asset('public/public/images/team/team-decoration-3.jpg') }});"></div>
                        <div class="team-item">
                            <div class="team-item-image">
                                <img src="{{ asset('public/public/images/team/team-3.jpg') }}" alt="" />
                                <div class="team-item-detail">
                                    <p class="team-item-detail-title">
                                        Whats Up!
                                    </p>
                                    <p>
                                        Adipiscing elit curabitur eu&nbsp;adipiscing lacus eu&nbsp;adipiscing lacus, a&nbsp;iaculis diam.
                                    </p>
                                    <div class="team-social-links">
                                        <a href="#" target="_blank"><i class="fab fa-facebook"></i><span class="sr-only">Facebook profile</span></a>
                                        <a href="#" target="_blank"><i class="fab fa-twitter"></i><span class="sr-only">Twitter profile</span></a>
                                        <a href="#" target="_blank"><i class="fab fa-pinterest"></i><span class="sr-only">Pinterest profile</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item-descr">
                                <div class="team-item-name">
                                    Adam Johnson
                                </div>
                                <div class="team-item-role">
                                    Developer
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Team item -->

            </div>

        </div>
    </section>--}}
    <!-- End About Section -->

    {{--@include('includes.divider')--}}

    <!-- Services Section -->
    <section class="page-section mt-0" id="services">
        <div class="container relative">

            <div class="text-center mb-80 mb-sm-50">
                <h2 class="section-title">Kumaşlarımız</h2>
                <p class="section-title-descr">
                    Kumaşlarımızı inceleyin.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="row services-grid">

                @foreach ($categories as $category)
                    <!-- Services Item -->
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="services-item text-center wow fadeIn" data-wow-delay="0" data-wow-duration="1.5s">
                            <div class="">
                                <a href="/category/{{$category->slug}}">
                                    <img src="{{ asset("public/public/$category->image") }}"
                                         alt='{{ $category->name }}'/>
                                </a>
                            </div>
                            <h3 class="services-title mt-2">{{ $category->name }}</h3>
                            <div class="services-descr mb-5">
                                {{ $category->description }}
                            </div>
                        </div>
                    </div>
                    <!-- End Services Item -->
                @endforeach

                <!-- Services Item -->
            </div>
            <!-- End Services Grid -->

        </div>
    </section>
    <!-- End Services Section -->


    <!-- Call Action Section -->
    {{--<section class="page-section pt-0 pb-0 banner-section bg-dark light-content">
        <div class="container relative">

            <div class="row">

                <div class="col-lg-6 relative">
                    <div class="banner-image-1">
                        <img src="{{ asset('public/public/images/promo-1.jpg') }}" alt="" class="wow scaleOutIn"
                             data-wow-duration="1.2s" data-wow-offset="292" />
                    </div>
                    <div class="banner-image-2">
                        <img src="{{ asset('public/public/images/promo-2.jpg') }}" alt="" class="wow scaleOutIn"
                             data-wow-duration="1.2s" data-wow-offset="70" />
                    </div>
                </div>

                <div class="col-lg-5 offset-lg-1">
                    <div class="mt-140 mt-lg-80 mt-md-60 mt-xs-30 mb-140 mb-lg-80">
                        <div class="banner-content wow fadeInUpShort" data-wow-duration="1.2s">
                            <h3 class="banner-heading">Looking for exclusive digital services?</h3>
                            <div class="banner-decription">
                                Proin fringilla augue at maximus vestibulum. Nam pulvinar vitae porttitor. Integer non
                                dapibus diam, ac eleifend lectus.
                            </div>
                            <div class="local-scroll">
                                <a href="pages-services-1.html" class="btn btn-mod btn-w btn-large btn-round">View
                                    Services</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Call Action Section -->


    <!-- Portfolio Section -->
    <section class="page-section pb-0" id="portfolio">
        <div class="full-wrapper relative">

            <div class="text-center mb-80 mb-sm-50">
                <h2 class="section-title">Our Works</h2>
                <p class="section-title-descr">
                    Look at selection of our projects
                </p>
            </div>

            <!-- Works Filter -->
            <div class="works-filter text-center">
                <a href="#" class="filter active" role="button" aria-pressed="true" data-filter="*">All works</a>
                <a href="#branding" class="filter" role="button" aria-pressed="false"
                   data-filter=".branding">Branding</a>
                <a href="#design" class="filter" role="button" aria-pressed="false" data-filter=".design">Design</a>
                <a href="#photography" class="filter" role="button" aria-pressed="false" data-filter=".photography">Photography</a>
            </div>
            <!-- End Works Filter -->

            <!-- Works Grid -->
            <ul class="works-grid work-grid-3 work-grid-gut clearfix hover-white hide-titles" id="work-grid">

                <!-- Work Item (Lightbox) -->
                <li class="work-item mix photography">
                    <a href="images/portfolio/full-project-1.jpg" class="work-lightbox-link mfp-image">
                        <div class="work-img">
                            <div class="work-img-bg wow-p scalexIn"></div>
                            <img src="{{ asset('public/public/images/portfolio/projects-1.jpg') }}" alt="Work Description"
                                 class="wow-p fadeIn" data-wow-delay="1s" />
                        </div>
                        <div class="work-intro">
                            <h3 class="work-title">Green Leaf</h3>
                            <div class="work-descr">
                                Lightbox
                            </div>
                        </div>
                    </a>
                </li>
                <!-- End Work Item -->

                <!-- Work Item (External Page) -->
                <li class="work-item mix branding design">
                    <a href="portfolio-single-1.html" class="work-ext-link">
                        <div class="work-img">
                            <div class="work-img-bg wow-p scalexIn"></div>
                            <img src="{{ asset('public/public/images/portfolio/projects-2.jpg') }}" alt="Work Description"
                                 class="wow-p fadeIn" data-wow-delay="1s" />
                        </div>
                        <div class="work-intro">
                            <h3 class="work-title">Photo Lighting</h3>
                            <div class="work-descr">
                                External Page
                            </div>
                        </div>
                    </a>
                </li>
                <!-- End Work Item -->

                <!-- Work Item (External Page) -->
                <li class="work-item mix branding">
                    <a href="portfolio-single-1.html" class="work-ext-link">
                        <div class="work-img">
                            <div class="work-img-bg wow-p scalexIn"></div>
                            <img src="{{ asset('public/public/images/portfolio/projects-3.jpg') }}" alt="Work Description"
                                 class="wow-p fadeIn" data-wow-delay="1s" />
                        </div>
                        <div class="work-intro">
                            <h3 class="work-title">Green Branch</h3>
                            <div class="work-descr">
                                External Page
                            </div>
                        </div>
                    </a>
                </li>
                <!-- End Work Item -->

                <!-- Work Item (External Page) -->
                <li class="work-item mix design photography">
                    <a href="portfolio-single-1.html" class="work-ext-link">
                        <div class="work-img">
                            <div class="work-img-bg wow-p scalexIn"></div>
                            <img src="{{ asset('public/public/images/portfolio/projects-4.jpg') }}" alt="Work Description"
                                 class="wow-p fadeIn" data-wow-delay="1s" />
                        </div>
                        <div class="work-intro">
                            <h3 class="work-title">White Chair</h3>
                            <div class="work-descr">
                                External Page
                            </div>
                        </div>
                    </a>
                </li>
                <!-- End Work Item -->

                <!-- Work Item (External Page) -->
                <li class="work-item mix design">
                    <a href="portfolio-single-1.html" class="work-ext-link">
                        <div class="work-img">
                            <div class="work-img-bg wow-p scalexIn"></div>
                            <img src="{{ asset('public/public/images/portfolio/projects-5.jpg') }}" alt="Work Description"
                                 class="wow-p fadeIn" data-wow-delay="1s" />
                        </div>
                        <div class="work-intro">
                            <h3 class="work-title">White Table</h3>
                            <div class="work-descr">
                                External Page
                            </div>
                        </div>
                    </a>
                </li>
                <!-- End Work Item -->

                <!-- Work Item (Lightbox) -->
                <li class="work-item mix design branding">
                    <a href="images/portfolio/full-project-6.jpg" class="work-lightbox-link mfp-image">
                        <div class="work-img">
                            <div class="work-img-bg wow-p scalexIn"></div>
                            <img src="{{ asset('public/public/images/portfolio/projects-6.jpg') }}" alt="Work Description"
                                 class="wow-p fadeIn" data-wow-delay="1s" />
                        </div>
                        <div class="work-intro">
                            <h3 class="work-title">The Book</h3>
                            <div class="work-descr">
                                Lightbox
                            </div>
                        </div>
                    </a>
                </li>
                <!-- End Work Item -->

            </ul>
            <!-- End Works Grid -->

            <!-- Call Action Section -->
            <section class="small-section bg-gray">
                <div class="container relative">
                    <div class="row wow fadeInUpShort">
                        <div class="col-lg-5 offset-lg-2">
                            <h3 class="call-action-1-heading">Like our creative works?</h3>
                            <div class="call-action-1-decription mb-0 pb-md-20">
                                Proin fringilla augue at maximus vestibulum nam pulvinar vitae integer non dapibus diam,
                                ac eleifend lectus.
                            </div>
                        </div>
                        <div class="col-lg-3 pt-10 text-lg-end">
                            <div class="local-scroll">
                                <a href="#contact" class="btn btn-mod btn-large btn-round">Start Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Call Action Section -->

        </div>
    </section>
    <!-- End Portfolio Section -->


    <!-- Process Section -->
    <section class="page-section">
        <div class="container relative">

            <!-- Grid -->
            <div class="row">

                <!-- Text Item -->
                <div class="col-md-12 col-lg-3">
                    <div class="align-left">
                        <h2 class="work-process-heading mt-0">Work Process</h2>
                        <p class="work-process-description">
                            Lorem ipsum dolor sit amet casume adipisin elit. In maximus ligula semper metus pellentesque
                            mattis. Maecenas volutpat, diam enim.
                        </p>
                    </div>
                </div>
                <!-- End Text Item -->

                <!-- Item -->
                <div class="col-md-4 col-lg-3">
                    <div class="work-process-item text-center pt-20">
                        <div class="work-process-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                                 focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                                 clip-rule="evenodd">
                                <path d="M20 15c0 .552-.448 1-1 1s-1-.448-1-1 .448-1 1-1 1 .448 1 1m-3 0c0 .552-.448 1-1 1s-1-.448-1-1 .448-1 1-1 1 .448 1 1m-3 0c0 .552-.448 1-1 1s-1-.448-1-1 .448-1 1-1 1 .448 1 1m5.415 4.946c-1 .256-1.989.482-3.324.482-3.465 0-7.091-2.065-7.091-5.423 0-3.128 3.14-5.672 7-5.672 3.844 0 7 2.542 7 5.672 0 1.591-.646 2.527-1.481 3.527l.839 2.686-2.943-1.272zm-13.373-3.375l-4.389 1.896 1.256-4.012c-1.121-1.341-1.909-2.665-1.909-4.699 0-4.277 4.262-7.756 9.5-7.756 5.018 0 9.128 3.194 9.467 7.222-1.19-.566-2.551-.889-3.967-.889-4.199 0-8 2.797-8 6.672 0 .712.147 1.4.411 2.049-.953-.126-1.546-.272-2.369-.483m17.958-1.566c0-2.172-1.199-4.015-3.002-5.21l.002-.039c0-5.086-4.988-8.756-10.5-8.756-5.546 0-10.5 3.698-10.5 8.756 0 1.794.646 3.556 1.791 4.922l-1.744 5.572 6.078-2.625c.982.253 1.932.407 2.85.489 1.317 1.953 3.876 3.314 7.116 3.314 1.019 0 2.105-.135 3.242-.428l4.631 2-1.328-4.245c.871-1.042 1.364-2.384 1.364-3.75" />
                            </svg>
                        </div>
                        <h3 class="work-process-title">1. Disscuss</h3>
                    </div>
                </div>
                <!-- End Item -->

                <!-- Item -->
                <div class="col-md-4 col-lg-3">
                    <div class="work-process-item text-center pt-20">
                        <div class="work-process-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                                 focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                                 clip-rule="evenodd">
                                <path d="M6 3.447h-1v-1.447h19v16h-7.731l2.731 4h-1.311l-2.736-4h-1.953l-2.736 4h-1.264l2.732-4h-2.732v-1h8v-1h3v1h3v-14h-17v.447zm2.242 17.343c-.025.679-.576 1.21-1.256 1.21-.64 0-1.179-.497-1.254-1.156l-.406-4.034-.317 4.019c-.051.656-.604 1.171-1.257 1.171-.681 0-1.235-.531-1.262-1.21l-.262-6.456-.308.555c-.241.437-.8.638-1.265.459-.404-.156-.655-.538-.655-.951 0-.093.012-.188.039-.283l1.134-4.098c.17-.601.725-1.021 1.351-1.021h4.096c.511 0 1.012-.178 1.285-.33.723-.403 2.439-1.369 3.136-1.793.394-.243.949-.147 1.24.217.32.396.286.95-.074 1.297l-3.048 2.906c-.375.359-.595.849-.617 1.381-.061 1.397-.3 8.117-.3 8.117zm-5.718-10.795c-.18 0-.34.121-.389.294-.295 1.04-1.011 3.666-1.134 4.098l1.511-2.593c.172-.295.623-.18.636.158l.341 8.797c.01.278.5.287.523.002 0 0 .269-3.35.308-3.944.041-.599.449-1.017.992-1.017.547.002.968.415 1.029 1.004.036.349.327 3.419.385 3.938.043.378.505.326.517.022 0 0 .239-6.725.3-8.124.033-.791.362-1.523.925-2.061l3.045-2.904c-.661.492-2.393 1.468-3.121 1.873-.396.221-1.07.457-1.772.457h-4.096zm16.476 1.005h-5v-1h5v1zm2-2h-7v-1h7v1zm-15.727-4.994c-1.278 0-2.315 1.038-2.315 2.316 0 1.278 1.037 2.316 2.315 2.316s2.316-1.038 2.316-2.316c0-1.278-1.038-2.316-2.316-2.316zm0 1c.726 0 1.316.59 1.316 1.316 0 .726-.59 1.316-1.316 1.316-.725 0-1.315-.59-1.315-1.316 0-.726.59-1.316 1.315-1.316zm15.727 1.994h-7v-1h7v1z" />
                            </svg>
                        </div>
                        <h3 class="work-process-title">2. Make</h3>
                    </div>
                </div>
                <!-- End Item -->

                <!-- Item -->
                <div class="col-md-4 col-lg-3">
                    <div class="work-process-item text-center pt-20">
                        <div class="work-process-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                                 focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                                 clip-rule="evenodd">
                                <path d="M15.551 14.703c.474 1.372 2.049 2.459 3.801 1.868l.021-.007c1.565-.544 2.391-2.242 1.854-3.807-.187-.546-.425-1.137-.695-1.757h-5.967c.299 1.366.625 2.647.986 3.703m2.264-9.232l-4.051 1.388c.183 1.037.379 2.103.59 3.141h5.726c-.655-1.404-1.445-2.94-2.265-4.529m.492-1.226c1.524 2.958 3.086 5.915 3.866 8.187.598 1.744-.045 3.895-2.028 4.874l1.211 3.529c.291.812 1.322.926 2.392.808l.252.735-4.728 1.622-.272-.788c.903-.479 1.688-1.215 1.41-2.054l-1.208-3.52c-2.162.439-3.994-.861-4.596-2.61-.791-2.304-1.405-5.566-1.976-8.837l5.677-1.946zm-8.872 6.755h-5.967c-.27.62-.508 1.211-.695 1.757-.536 1.565.289 3.263 1.854 3.807l.021.007c1.753.591 3.328-.496 3.801-1.868.362-1.056.688-2.337.986-3.703m-5.515-1h5.726c.211-1.038.407-2.104.591-3.141l-4.051-1.388c-.821 1.589-1.611 3.125-2.266 4.529m7.45-3.809c-.571 3.271-1.185 6.533-1.976 8.837-.602 1.749-2.434 3.049-4.596 2.61l-1.208 3.52c-.278.839.507 1.575 1.41 2.054l-.271.788-4.729-1.622.252-.735c1.07.118 2.102.004 2.392-.808l1.211-3.529c-1.983-.979-2.625-3.13-2.028-4.874.78-2.272 2.342-5.229 3.867-8.187l5.676 1.946zm7.13 7.811c.414 0 .75.336.75.75 0 .413-.336.75-.75.75s-.75-.337-.75-.75c0-.414.336-.75.75-.75m-14.5.248c0 .414.336.75.75.75s.75-.336.75-.75c0-.413-.336-.75-.75-.75s-.75.337-.75.75m3.25-2.25c.414 0 .75.337.75.75 0 .414-.336.75-.75.75s-.75-.336-.75-.75c0-.413.336-.75.75-.75m10.5-.499c.414 0 .75.336.75.751 0 .413-.336.75-.75.75s-.75-.337-.75-.75c0-.415.336-.751.75-.751m-5.249-7.977v-3.023c0-.277-.223-.5-.5-.5-.275 0-.499.223-.499.5v3.023c0 .276.224.5.499.5.277 0 .5-.224.5-.5m1.932.462l1.641-2.79c.142-.238.062-.545-.176-.685-.239-.139-.544-.062-.684.177l-1.643 2.79c-.14.238-.06.545.176.685.08.047.167.069.254.069.172 0 .339-.088.432-.246m-4.552.246c-.171 0-.337-.088-.432-.246l-1.642-2.79c-.14-.238-.061-.545.177-.685.237-.14.544-.061.685.177l1.643 2.79c.139.238.061.545-.178.685-.08.047-.166.069-.253.069" />
                            </svg>
                        </div>
                        <h3 class="work-process-title">3. Product</h3>
                    </div>
                </div>
                <!-- End Item -->

            </div>
            <!-- End Grid -->

        </div>
    </section>
    <!-- End Process Section -->


    @include('includes.divider')


    <!-- Call Action Section -->
    <section class="page-section">
        <div class="container relative">
            <div class="row">

                <!-- Images -->
                <div class="col-lg-7 mb-md-60 mb-xs-30">
                    <div class="call-action-2-images">

                        <div class="call-action-2-image-1">
                            <img src="{{ asset('public/public/images/promo-3.jpg') }}" alt="" class="wow scaleOutIn"
                                 data-wow-duration="1.2s" data-wow-offset="255" />
                        </div>

                        <div class="call-action-2-image-2">
                            <img src="{{ asset('public/public/images/promo-4.jpg') }}" alt="" class="wow scaleOutIn"
                                 data-wow-duration="1.2s" data-wow-offset="134" />
                        </div>

                        <div class="call-action-2-image-3">
                            <img src="{{ asset('public/public/images/promo-5.jpg') }}" alt="" class="wow scaleOutIn"
                                 data-wow-duration="1.2s" data-wow-offset="0" />
                        </div>

                    </div>
                </div>
                <!-- End Images -->

                <!-- Text -->
                <div class="col-lg-5 wow fadeInUpShort" data-wow-duration="1.2s" data-wow-offset="255">

                    <h2 class="section-title mb-50 mb-sm-20">Why choose us?</h2>

                    <dl class="call-action-2-text mb-60 mb-sm-30">
                        <dt>
                            01. We are strongly creative.
                        </dt>
                        <dd>
                            Lorem ipsum dolor sit amet, rembe adipiscing elite. Inwege maximus ligula semper metusere
                            pellentesque mattis.
                        </dd>
                        <dt>
                            02. We are very responsible.
                        </dt>
                        <dd>
                            Fusce aliquet quam eget neque ultrices elementum. Nulla posuere felis id arcu blandit
                            sagittis. Eleifender vestibulum purus risus.
                        </dd>
                        <dt>
                            03. We are super friendly.
                        </dt>
                        <dd>
                            Integer non dapibus diam, ac eleifend lectus. Praesent sed nisi eleifend, fermentum orci sit
                            amet, iaculis libero interdum.
                        </dd>
                    </dl>

                    <div class="local-scroll">
                        <a href="#contact" class="btn btn-mod btn-large btn-round">Start Project</a>
                    </div>

                </div>
                <!-- End Text -->

            </div>
        </div>
    </section>
    <!-- End Call Action Section -->


    @include('includes.divider')


    <!-- Promo Section -->
    <section class="page-section">
        <div class="container relative">
            <div class="row">

                <!-- Text -->
                <div class="col-lg-6 wow fadeInUpShort" data-wow-duration="1.2s" data-wow-offset="205">

                    <div class="row">
                        <div class="col-lg-10">
                            <h2 class="section-title mb-60 mb-sm-30">Awesome Template With Clean Design</h2>
                        </div>
                    </div>

                    <!-- Features Grid -->
                    <div class="row alt-features-grid">

                        <!-- Features Item -->
                        <div class="col-lg-6">
                            <div class="alt-features-item">
                                <div class="alt-features-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                                         aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg"
                                         fill-rule="evenodd" clip-rule="evenodd">
                                        <path d="M21.62 20.196c1.055-.922 1.737-2.262 1.737-3.772 0-1.321-.521-2.515-1.357-3.412v-6.946l-11.001-6.066-11 6v12.131l11 5.869 5.468-2.917c.578.231 1.205.367 1.865.367.903 0 1.739-.258 2.471-.676l2.394 3.226.803-.596-2.38-3.208zm-11.121 2.404l-9.5-5.069v-10.447l9.5 4.946v10.57zm1-.001v-10.567l5.067-2.608.029.015.021-.04 4.384-2.256v5.039c-.774-.488-1.686-.782-2.668-.782-2.773 0-5.024 2.252-5.024 5.024 0 1.686.838 3.171 2.113 4.083l-3.922 2.092zm6.833-2.149c-2.219 0-4.024-1.808-4.024-4.026s1.805-4.025 4.024-4.025c2.22 0 4.025 1.807 4.025 4.025 0 2.218-1.805 4.026-4.025 4.026zm-.364-3.333l-1.306-1.147-.66.751 2.029 1.782 2.966-3.12-.725-.689-2.304 2.423zm-16.371-10.85l4.349-2.372 9.534 4.964-4.479 2.305-9.404-4.897zm9.4-5.127l9.404 5.186-3.832 1.972-9.565-4.98 3.993-2.178z" />
                                    </svg>
                                </div>
                                <h3 class="alt-features-title">Unique Design</h3>
                                <div class="alt-features-descr">
                                    Fusce aliquet quam eget neque ultrices elementum felis id arcu blandit sagittis.
                                </div>
                            </div>
                        </div>
                        <!-- End Features Item -->

                        <!-- Features Item -->
                        <div class="col-lg-6">
                            <div class="alt-features-item">
                                <div class="alt-features-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                                         aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg"
                                         fill-rule="evenodd" clip-rule="evenodd">
                                        <path d="M12 0c-3.371 2.866-5.484 3-9 3v11.535c0 4.603 3.203 5.804 9 9.465 5.797-3.661 9-4.862 9-9.465v-11.535c-3.516 0-5.629-.134-9-3zm0 1.292c2.942 2.31 5.12 2.655 8 2.701v10.542c0 3.891-2.638 4.943-8 8.284-5.375-3.35-8-4.414-8-8.284v-10.542c2.88-.046 5.058-.391 8-2.701zm5 7.739l-5.992 6.623-3.672-3.931.701-.683 3.008 3.184 5.227-5.878.728.685z" />
                                    </svg>
                                </div>
                                <h3 class="alt-features-title">Quality Code</h3>
                                <div class="alt-features-descr">
                                    Lorem ipsum dolor sit amet rembe adipiscing elite Inwege maximus ligula.
                                </div>
                            </div>
                        </div>
                        <!-- End Features Item -->

                        <!-- Features Item -->
                        <div class="col-lg-6">
                            <div class="alt-features-item">
                                <div class="alt-features-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                                         aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg"
                                         fill-rule="evenodd" clip-rule="evenodd">
                                        <path d="M6.514 24.015h-3v-3.39c-2.08-.638-3.5-2.652-3.5-5.04 0-1.19.202-1.693 1.774-5.603.521-1.294 1.195-2.97 2.068-5.179.204-.518.67-.806 1.17-.802.482.004.941.284 1.146.802.718 1.817 1.302 3.274 1.777 4.454.26-.596.567-1.288.928-2.103.694-1.565 1.591-3.592 2.754-6.265.258-.592.881-.906 1.397-.888.572.015 1.126.329 1.369.888 1.163 2.673 2.06 4.7 2.754 6.265 2.094 4.727 2.363 5.334 2.363 6.764 0 2.927-2.078 5.422-5 6.082v4.015h-3v-4.015c-.943-.213-1.797-.617-2.523-1.165-.612.845-1.466 1.48-2.477 1.79v3.39zm14.493-6c1.652 0 2.993 1.341 2.993 2.993s-1.341 2.993-2.993 2.993-2.993-1.341-2.993-2.993 1.341-2.993 2.993-2.993zm.007.993c1.104 0 2 .896 2 2s-.896 2-2 2-2-.896-2-2 .896-2 2-2zm-7.5 3.993v-3.839c4.906-.786 5-4.751 5-5.244 0-1.218-.216-1.705-2.277-6.359-2.134-4.82-2.721-6.198-2.755-6.261-.079-.145-.193-.292-.455-.297-.238 0-.37.092-.481.297-.034.063-.621 1.441-2.755 6.261-2.061 4.654-2.277 5.141-2.277 6.359 0 .493.094 4.458 5 5.244v3.839h1zm-6.123-12.448l-.08-.198c-1.589-3.957-2.04-5.116-2.067-5.171-.072-.151-.15-.226-.226-.228-.109 0-.188.13-.235.228-.028.05-.316.818-2.066 5.171-1.542 3.833-1.703 4.233-1.703 5.23 0 1.988 1.076 3.728 3.5 4.25v3.166h1v-3.166c1.266-.273 2.159-.876 2.725-1.666-1.078-1.12-1.725-2.619-1.725-4.251 0-.979.126-1.572.877-3.365z" />
                                    </svg>
                                </div>
                                <h3 class="alt-features-title">Clean and Minimal</h3>
                                <div class="alt-features-descr">
                                    Maecenas volutpat, diam enime volutpa cras luctus interdum sodales.
                                </div>
                            </div>
                        </div>
                        <!-- End Features Item -->

                        <!-- Features Item -->
                        <div class="col-lg-6">
                            <div class="alt-features-item">
                                <div class="alt-features-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                                         aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg"
                                         fill-rule="evenodd" clip-rule="evenodd">
                                        <path d="M16 3.383l-.924-.383-7.297 17.617.924.383 7.297-17.617zm.287 3.617l6.153 4.825-6.173 5.175.678.737 7.055-5.912-7.048-5.578-.665.753zm-8.478 0l-6.249 4.825 6.003 5.175-.679.737-6.884-5.912 7.144-5.578.665.753z" />
                                    </svg>
                                </div>
                                <h3 class="alt-features-title">Easy Customization</h3>
                                <div class="alt-features-descr">
                                    Praesent sed nisi eleifend lorem ember fermete acome ante lorem ipsum.
                                </div>
                            </div>
                        </div>
                        <!-- End Features Item -->

                    </div>
                    <!-- End Features Grid -->

                </div>
                <!-- End Text -->

                <!-- Images -->
                <div class="col-lg-6">
                    <div class="call-action-3-images mt-xs-0 text-end">

                        <div class="call-action-3-image-1">
                            <img src="{{ asset('public/public/images/promo-6.jpg') }}" alt="" class="wow scaleOutIn"
                                 data-wow-duration="1.2s" data-wow-offset="205" />
                        </div>

                        <div class="call-action-3-image-2-wrap d-flex align-items-center">
                            <div class="call-action-3-image-2">
                                <img src="{{ asset('public/public/images/promo-7.jpg') }}" alt="" class="wow scaleOutIn"
                                     data-wow-duration="1.2s" />
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End Images -->

            </div>
        </div>
    </section>
    <!-- End Promo Section -->


    <!-- Testimonials Section -->
    <section class="page-section bg-dark bg-dark-alfa-70 bg-scroll light-content"
             data-background="{{ asset('public/public/images/full-width-images/section-bg-2.jpg') }}">
        <div class="container relative">

            <div class="row">
                <div class=" col-lg-8 offset-lg-2 wow fadeInUpShort">

                    <div class="text-center mb-50 mb-sm-20">
                        <h2 class="section-title">What People Say?</h2>
                    </div>

                    <div class="text-slider">

                        <!-- Slide Item -->
                        <div>
                            <blockquote class="testimonial">
                                <p>
                                    Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit aenean congue,
                                    risus utaliquam dapibus lorem ipsum dolor. Thanks!
                                </p>
                                <footer class="testimonial-author mt-50 mt-sm-20">
                                    — John Doe, doodle inc.
                                </footer>
                            </blockquote>
                        </div>
                        <!-- End Slide Item -->

                        <!-- Slide Item -->
                        <div>
                            <blockquote class="testimonial">
                                <p>
                                    Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit aenean congue,
                                    risus utaliquam dapibus lorem ipsum dolor. Thanks!
                                </p>
                                <footer class="testimonial-author mt-50 mt-sm-20">
                                    — John Doe, doodle inc.
                                </footer>
                            </blockquote>
                        </div>
                        <!-- End Slide Item -->

                        <!-- Slide Item -->
                        <div>
                            <blockquote class="testimonial">
                                <p>
                                    Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit aenean congue,
                                    risus utaliquam dapibus lorem ipsum dolor. Thanks!
                                </p>
                                <footer class="testimonial-author mt-50 mt-sm-20">
                                    — John Doe, doodle inc.
                                </footer>
                            </blockquote>
                        </div>
                        <!-- End Slide Item -->

                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End Testimonials Section -->--}}

    <!-- Contact Section -->
    <section class="page-section p-0" id="contact">
        <div class="container relative">

            <div class="text-center mb-80 mb-sm-50">
                <h2 class="section-title">İletişim</h2>
                <p class="section-title-descr">
                    Yeni projelerinizde yanınızdayız
                </p>
            </div>

            <div class="row mb-60 mb-xs-40">

                <div class="col-md-10 offset-md-1">
                    <div class="row">

                        <!-- Phone -->
                        <div class="col-sm-6 col-lg-4 pb-20">
                            <div class="contact-item wow fadeScaleIn" data-wow-delay="0" data-wow-duration="1s">
                                <div class="ci-icon">
                                    <i class="fa fa-phone-alt"></i>
                                </div>
                                <div class="ci-title">
                                    Bizi arayın
                                </div>
                                <div class="ci-text">
                                    Ofis: <a href="tel:0216 5264020">0216 526 40 20</a>
                                    <br>
                                    Cep: <a href="tel:0555 012 20 42">0555 012 20 42</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Phone -->

                        <!-- Address -->
                        <div class="col-sm-6 col-lg-4 pb-20">
                            <div class="contact-item wow fadeScaleIn" data-wow-delay=".1s" data-wow-duration="1s">
                                <div class="ci-icon">
                                    <i class="fa fa-map-marker-alt"></i>
                                </div>
                                <div class="ci-title">
                                    Adres
                                </div>
                                <div class="ci-text">
                                    Y.Dudullu Mah. Necip Fazıl Bulvarı
                                    Keresteciler(Keyap) Sitesi K1 Blok No:44/170
                                    Ümraniye / İstanbul
                                </div>
                                <div class="ci-link">
                                    <a href="https://goo.gl/maps/NQDszkp4odjZwdNw5" target="_blank">Haritada Gör</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Address -->

                        <!-- Email -->
                        <div class="col-sm-6 col-lg-4 pb-20">
                            <div class="contact-item wow fadeScaleIn" data-wow-delay=".2s" data-wow-duration="1s">
                                <div class="ci-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="ci-title">
                                    Email
                                </div>
                                <div class="ci-link">
                                    <a href="mailto:info@pacavratekstil.com">info@pacavratekstil.com</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Email -->

                    </div>
                </div>

            </div>

            <!-- Contact Form -->
            {{--<div class="row">
                <div class="col-md-10 offset-md-1">

                    <form class="form contact-form wow fadeInUpShort" data-wow-delay=".5s" id="contact_form">

                        <div class="row">
                            <div class="col-md-6">
                                <!-- Name -->
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="input-lg round form-control"
                                           placeholder="Enter your name" pattern=".{3,100}" required
                                           aria-required="true">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Email -->
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="input-lg round form-control"
                                           placeholder="Enter your email" pattern=".{5,100}" required
                                           aria-required="true">
                                </div>
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" class="input-lg round form-control"
                                      style="height: 130px;" placeholder="Enter your message"></textarea>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <!-- Inform Tip -->
                                <div class="form-tip pt-20 pt-sm-0 mb-sm-20">
                                    All the fields are required
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- Send Button -->
                                <div class="text-end pt-10">
                                    <button class="submit_btn btn btn-mod btn-large btn-round" id="submit_btn"
                                            aria-controls="result">
                                        Submit Message
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div id="result" role="region" aria-live="polite" aria-atomic="true"></div>

                    </form>

                </div>
            </div>--}}
            <!-- End Contact Form -->

        </div>
    </section>
    <!-- End Contact Section -->


    <!-- Google Map -->
    {{--<div class="google-map">

        <a href="#" class="map-section">
            <div class="map-toggle wow fadeInUpShort" aria-hidden="true">
                <div class="mt-icon">
                    <i class="fa fa-map-marker-alt"></i>
                </div>
                <div class="mt-text">
                    <div class="mt-open">Open the map <i class="mt-open-icon"></i></div>
                    <div class="mt-close">Close the map <i class="mt-close-icon"></i></div>
                </div>
            </div>
        </a>

        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d24572.368311964965!2d-75.602613!3d39.65993!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c703f3d191cf13%3A0xf4674106f987fe3a!2zMjQ1IFF1aWdsZXkgQmx2ZCBTdGUgSywgTmV3IENhc3RsZSwgREUgMTk3MjAsINCh0L_QvtC70YPRh9C10L3RliDQqNGC0LDRgtC4INCQ0LzQtdGA0LjQutC4!5e0!3m2!1suk!2sua!4v1584450429598!5m2!1suk!2sua" width="600" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    </div>--}}
    <!-- End Google Map -->

    <!-- Call Action Section -->
    {{--<section class="small-section bg-dark light-content">
        <div class="container relative">
            <div class="row wow fadeInUpShort">
                <div class="col-md-8 offset-md-2 text-center">
                    <h3 class="call-action-1-heading">Want to discuss your new project?</h3>
                    <div class="call-action-1-decription mb-60 mb-sm-30">
                        Proin fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Integer non
                        dapibus diam, ac eleifend lectus. Duis placerat ex gravida nibh tristique ultricies eros lorem
                        blandit.
                    </div>

                    <div class="local-scroll">
                        <a href="pages-contact-1.html" class="btn btn-mod btn-w btn-large btn-round">Let's Talk</a>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <!-- End Call Action Section -->
    <a id="video" data-fancybox="video-gallery" href="{{ asset('public/public/video/IMG_4091.mp4') }}"></a>
@endsection
