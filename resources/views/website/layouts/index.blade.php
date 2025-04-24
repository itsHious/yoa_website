<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('website/assets/images/logo/logo.jpg')}}">
    <title>YOA Global Education Partners||Empowering Minds. Transforming Systems.</title>
    <link rel="stylesheet" href="{{ asset('website/assets/css/plugins/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/plugins/swiper.css')}}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/plugins/metismenu.css')}}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/plugins/magnifying-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/plugins/odometer.css')}}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/style.css')}}">
    @yield('page-css')
</head>

<body class="onepage">
    <div class="loader-wrapper">
        <div class="loader">
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <header class="header-transparent header-seven header--sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-transparent-main-wrapper">
                        <a href="{{ route('/') }}" class="logo">
                            <img src="{{ asset('website/assets/images/logo/logo_e.png')}}" width="200" alt="">
                        </a>
                        <div class="nav-area">
                            <ul>
                                <li class="main-nav mega-menu project-a-after">
                                    <a href="{{ route('/') }}">Home</a>
                                </li>

                                <li class="main-nav mega-menu">
                                    <a href="{{ route('about') }}">About</a>
                                </li>
                                <li class="main-nav mega-menu">
                                    <a href="{{ route('services') }}">Service</a>
                                </li>
                                <li class="main-nav mega-menu">
                                    <a href="#">Project</a>
                                </li>
                                <li class="main-nav project-a-after">
                                    <a href="#">Blog</a>
                                </li>
                                <li class="main-nav"><a href="#">Contact</a></li>
                            </ul>
                        </div>

                        {{-- <div class="action-area">
                            <a href="#" class="rts-btn btn-primary btn-white">Book a Meeting</a>
                            <button id="menu-btn" class="menu menu-btn ml--20 ml_sm--5">
                                <img class="menu-light" src="{{ asset('website/assets/images/icons/01.svg')}}" alt="Menu-icon">
                            </button>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </header>

@yield('content')

<div id="side-bar" class="side-bar header-two">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <div class="rts-sidebar-menu-desktop">
        <a class="logo-1" href="index-2.html"><img class="logo" src="{{ asset('website/assets/images/logo/logo_e.png')}}" alt="finbiz_logo"></a>
        <div class="body d-none d-xl-block">
            <p class="disc">
                We must explain to you how all seds this mistakens idea denouncing pleasures and praising account.
                All seds this mistakens idea denouncing pleasures.
            </p>
            <div class="get-in-touch">
                <div class="h6 title">Get In Touch</div>
                <div class="wrapper">
                    <div class="single">
                        <i class="fas fa-phone-alt"></i>
                        <a href="#">+8801234566789</a>
                    </div>
                    <div class="single">
                        <i class="fas fa-envelope"></i>
                        <a href="#">example@gmail.com</a>
                    </div>
                    <div class="single">
                        <i class="fas fa-globe"></i>
                        <a href="#">www.webexample.com</a>
                    </div>
                    <div class="single">
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="#">13/A, New Pro State, NYC</a>
                    </div>
                </div>
                <div class="social-wrapper-two menu">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu d-block d-xl-none">
        <nav class="nav-main mainmenu-nav mt--30">
            <ul class="mainmenu metismenu" id="mobile-menu-active">
                <li class="main-nav mega-menu text-white project-a-after">
                    <a class="main" href="#home">Home</a>
                </li>

                <li class="main-nav text-white mega-menu">
                    <a class="main" href="#about">About</a>
                </li>
                <li class="main-nav text-white mega-menu">
                    <a class="main" href="#service">Service</a>
                </li>
                <li class="main-nav text-white mega-menu">
                    <a class="main" href="#project">Project</a>
                </li>
                <li class="main-nav text-white project-a-after">
                    <a class="main" href="#blog">Blog</a>
                </li>
                <li class="main-nav text-white"><a class="main " href="#contact">Contact</a></li>
            </ul>
        </nav>

        <div class="social-wrapper-one">
            <ul>
                <li>
                    <a href="#">
                        <i class="text-white fa-brands fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="text-white fa-brands fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="text-white fa-brands fa-youtube"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="text-white fa-brands fa-linkedin-in"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>


<div class="search-input-area">
    <div class="container">
        <div class="search-input-inner">
            <div class="input-div">
                <input class="search-input autocomplete" type="text" placeholder="Search by keyword or #">
                <button><i class="far fa-search"></i></button>
            </div>
        </div>
    </div>
    <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
</div>
<div id="anywhere-home" class="">
</div>


<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
        </path>
    </svg>
</div>


<div class="rts-footer-area pt--100 pb--100 pt_sm--50 pb_sm--40  footer-two footer-bg-two">
    <div class="container">
        <div class="row">
            <!-- single wized -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="footer-two-single-wized left">
                    <h3 class="title animated fadeIn">
                        <span>Ready To</span> <br>
                        Work With Us?
                    </h3>
                    <p class="disc">
                        Felis consequat magnis est fames sagittis ultrices placerat sodales porttitor quisque.
                    </p>
                    <a class="rts-btn btn-primary" href="#">Get a Quote</a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--50">
                <div class="footer-two-single-wized two">
                    <div class="wized-title-area">
                        <h5 class="wized-title">Our Services</h5>
                        <img src="{{ asset('website/assets/images/footer/01.png')}}" alt="Invena_Footer">
                    </div>
                    <div class="wized-2-body">
                        <ul>
                            <li><a href="service-details.html"><i
                                        class="fal fa-chevron-double-right"></i>Business
                                    planning</a></li>
                            <li><a href="service-details.html"><i class="fal fa-chevron-double-right"></i>Tax
                                    strategy</a></li>
                            <li><a href="service-details.html"><i
                                        class="fal fa-chevron-double-right"></i>Financial
                                    advices</a></li>
                            <li><a href="service-details.html"><i
                                        class="fal fa-chevron-double-right"></i>Insurance
                                    strategy</a></li>
                            <li><a href="service-details.html"><i class="fal fa-chevron-double-right"></i>Manage
                                    investment</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- single wized -->
            <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--30 mt_md--30">
                <div class="footer-two-single-wized">
                    <div class="wized-title-area">
                        <h5 class="wized-title">Contact Us</h5>
                        <img src="{{ asset('website/assets/images/footer/01.png')}}" alt="Invena_Footer">
                    </div>
                    <div class="wized-2-body">
                        <div class="contact-info-1">
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="disc">
                                <span>Call Us 24/7</span>
                                <a href="#">(+256) 2145.2156</a>
                            </div>
                        </div>
                        <div class="contact-info-1">
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="disc">
                                <span>Work with us</span>
                                <a href="#">info@Invena.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single wized -->
            <!-- single wized -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="footer-two-single-wized right">
                    <div class="wized-2-body">
                        <div class="contact-info-1">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="disc">
                                <span>Our Location</span>
                                <a href="#">XYZ Hilton Street, 125 Town <br>
                                    United State</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single wized -->
        </div>
    </div>
</div>

<div class="rts-copy-right-1 ptb--10">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright-h-2-wrapper">
                    <p class="disc">
                        YOA - Copyright
                        <script>
                            document.write(
                                new Date().getFullYear()
                            )
                        </script>. All rights reserved.
                    </p>
                    <div class="right">
                        <ul>
                            <li>Designed By: <a target="_blank" href="https://eitsectechnologies.com">Eitsec Technologies</a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('website/assets/js/plugins/jquery.js')}}"></script>



<script src="{{ asset('website/assets/js/plugins/odometer.js')}}"></script>
<script src="{{ asset('website/assets/js/plugins/jquery-appear.js')}}"></script>


<script src="{{ asset('website/assets/js/plugins/gsap.js')}}"></script>
<script src="{{ asset('website/assets/js/plugins/split-text.js')}}"></script>
<script src="{{ asset('website/assets/js/plugins/scroll-trigger.js')}}"></script>
<script src="{{ asset('website/assets/js/plugins/smooth-scroll.js')}}"></script>
<script src="{{ asset('website/assets/js/plugins/metismenu.js')}}"></script>

<script src="{{asset('website/assets/css/plugins/magnific-popup.js')}}"></script>

<script src="{{ asset('website/assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{ asset('website/assets/js/plugins/swiper.js')}}"></script>

<script src="{{ asset('website/assets/js/main.js')}}"></script>
</body>


</html>
