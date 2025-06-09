<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('website/assets/images/logo/logo.jpg')}}">
    <title>YOA Global Education Partners||Empowering Minds. Transforming Systems.</title>

    <meta property="og:title" content="YOA Global Education Partners" />
    <meta property="og:type" content="website" /> 
    <meta property="og:url" content="{{ env('APP_URL') }}" />
    <meta property="og:image" content="{{ asset('website/assets/images/logo/logo.jpg')}}" />
    <meta property="og:description" content="YOA CEO led by Dr Yaw Osei Adutwum is a leading education consultancy committed to driving transformative changes in both local and global education systems. With deep expertise in policy-making, curriculum development, and capacity building, we aim to revolutionize educational practices, policies, and outcomes through strategic advisory services." />
    <meta property="og:site_name" content="YOA Global Education Partners" />

    <!-- Optional: Open Graph Locale and Other Tag -->
    <meta property="og:locale" content="en_US" /> <!-- Specify the language/locale -->
    <meta property="article:author" content="its_hious" />



    <link rel="stylesheet" href="{{ asset('website/assets/css/plugins/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/plugins/swiper.css')}}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/plugins/metismenu.css')}}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/plugins/magnifying-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/plugins/odometer.css')}}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/style.css')}}">
    <style>
        .text-justify{
            text-align: justify !important;
        }
    </style>
    @yield('page-css')
</head>

<body class="onepage">
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

 
    <div class="loader-wrapper">
        <div class="loader">
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <header class="header-transparent header-seven header--sticky {{  request()->routeIs('web.news.view') ? 'sticky' : ''}}">
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
                                    <a href="{{ route('team') }}">Team</a>
                                </li>
                                <li class="main-nav project-a-after">
                                    <a href="{{ route('web.news') }}">News</a>
                                </li>
                                <li class="main-nav project-a-after">
                                    <a href="{{ route('gallery') }}">Gallery</a>
                                </li>
                                <li class="main-nav project-a-after">
                                    <a href="{{ route('web.publications') }}">Publications</a>
                                </li>
                                <li class="main-nav"><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>

                        <div class="action-area">
                            {{-- <a href="#" class="rts-btn btn-primary btn-white">Book a Meeting</a> --}}
                            <button id="menu-btn" class="menu menu-btn ml--20 ml_sm--5">
                                <img class="menu-light" src="{{ asset('website/assets/images/icons/01.svg')}}" alt="Menu-icon">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

@yield('content')


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
                        Empowering Minds. <br> Transforming Systems.
                    </p>
                    <a class="rts-btn btn-primary" href="#">Get In Touch</a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--50">
                <div class="footer-two-single-wized two">
                    <div class="wized-title-area">
                        <h5 class="wized-title">Quick Links</h5>
                        <img src="{{ asset('website/assets/images/footer/01.png')}}" alt="Invena_Footer">
                    </div>
                    <div class="wized-2-body">
                        <ul>
                            <li><a href="{{ route('about') }}"><i
                                        class="fal fa-chevron-double-right"></i>About Us
                                    </a></li>
                            <li><a href="{{ route('services') }}"><i class="fal fa-chevron-double-right"></i>Services</a></li>
                            <li><a href="#"><i
                                        class="fal fa-chevron-double-right"></i>Gallery
                                    </a></li>
                                    <li><a href=" {{ route('contact') }}"><i
                                        class="fal fa-chevron-double-right"></i>Contct Us
                                    </a></li>
                                   
                        </ul>
                    </div>
                </div>
            </div>
            <!-- single wized -->
            <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--30 mt_md--30">
                <div class="footer-two-single-wized">
                    <div class="wized-title-area">
                        <h5 class="wized-title">Contact Us</h5>
                        <img src="{{ asset('website/assets/images/footer/01.svg')}}" alt="Invena_Footer">
                    </div>
                    <div class="wized-2-body">
                        <div class="contact-info-1">
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="disc">
                                <span>Call Us 24/7</span>
                                <a href="tel:+233597508601">+233597508601 </a>
                                <a href="tel:+233 241305592">+233 241305592
                                </a>
                            </div>
                        </div>
                        <div class="contact-info-1">
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="disc">
                                <span>Work with us</span>
                                <a href="#">info@yoagep.org</a>
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
                                <a href="#">1 Anum Yemo Loop, <br> East Legon, 
                                    <br>
                                    Accra, Ghana </a>
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
