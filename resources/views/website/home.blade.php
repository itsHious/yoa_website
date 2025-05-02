@extends('website.layouts.index')

@section('page-css')
    <style>
        .banner-four-area-main-wrapper .banner-four-bg {
  background-image: url('{{ asset('website/assets/images/header/2.jpg') }}');
  height: 824px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: auto;
}
.banner-four-area-main-wrapper .banner-four-bg.two {
  background-image: url('{{ asset('website/assets/images/header/3.jpg') }}');
}
.banner-four-area-main-wrapper .banner-four-bg.three {
  background-image: url('{{ asset('website/assets/images/header/4.jpg') }}');
}
@media only screen and (max-width: 767px) {
  .banner-four-area-main-wrapper .banner-four-bg {
    height: 600px;
  }
}
    </style>
@endsection

@section('content')
    <div class="banner-four-area-main-wrapper">

        <div class="swiper mySwiper-banner-four" dir="ltr">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-area-banner-four-wrapper">
                        <div class="banner-four-bg bg_image" >
                            <div class="dark-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7); z-index: 1;"></div>
                            <div class="container" style="position: relative; z-index: 2;">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="inner-content-wrapper-four-banner text-center">
                                            {{-- <h3 class="text-center pre subtitle">YOA</h3> --}}
                                            <h1 class="title">
                                                YOA Global<br>
                                                Education Partners
                                            </h1>
                                            <p class="disc">
                                                Empowering Minds. Transforming Systems.
                                            </p>
                                            <div class="button-wrapper">
                                                <a href="{{ route('about') }}" class="rts-btn btn-primary btn-white">Explore</a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-area-banner-four-wrapper">
                        <div class="banner-four-bg bg_image two">
                            <div class="dark-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7); z-index: 1;"></div>
                            <div class="container" style="position: relative; z-index: 2;">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="inner-content-wrapper-four-banner text-center">
                                            <h1 class="title">
                                                YOA Global<br>
                                                Education Partners
                                            </h1>
                                            <p class="disc">
                                                Empowering Minds. Transforming Systems.
                                            </p>
                                            <div class="button-wrapper">
                                                <a href="{{ route('about') }}" class="rts-btn btn-primary btn-white">Explore</a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-area-banner-four-wrapper">
                        <div class="banner-four-bg bg_image three">
                            <div class="dark-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7); z-index: 1;"></div>
                            <div class="container" style="position: relative; z-index: 2;">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="inner-content-wrapper-four-banner text-center">
                                            <h1 class="title">
                                                YOA Global<br>
                                                Education Partners
                                            </h1>
                                            <p class="disc">
                                                Empowering Minds. Transforming Systems.
                                            </p>
                                            <div class="button-wrapper">
                                                <a href="{{ route('about') }}" class="rts-btn btn-primary btn-white">Explore</a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-pagination"></div>
        {{-- <div class="banner-shape-left-right">
            <div class="left">
                <img src="website/assets/images/banner/shape/left.svg" alt="left">
            </div>
            <div class="right">
                <img src="website/assets/images/banner/shape/right.svg" alt="left">
            </div>
        </div> --}}
        
    </div>
    {{-- <div class="banner-seven-swiper-wrapper" id="home">

        <!-- index seven area start -->
        <div class="index-seven-area rts-section-gap with-video bg_banner-seven two bg_image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner-content-wrapper-four-banner text-center">
                            <h3 class="text-center pre subtitle">YOA</h3>
                            <h1 class="title">
                               Global  <span class="in">Education</span> Partners
                            </h1>
                            <p class="disc">
                                Empowering Minds. Transforming Systems.
                            </p>
                            <div class="button-wrapper">
                                <a href="{{ route('about') }}" class="rts-btn btn-primary btn-white">Explore</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
            <div class="hero-bg-video">
                <video autoplay="" muted="" loop="" id="myVideo">
                    <source src="{{ asset('website/assets/images/banner/01.mp4')}}" type="video/mp4">
                </video>
            </div>
          
        </div>
       

        <a href="#" class="to-bottom-area">
            <i class="fa-light fa-arrow-up"></i>
            Scroll
        </a>
    </div> --}}



    <!-- rts about us area start -->
    <div class="rts-about-area-two rts-section-gap" id="about">
        <div class="container pb--40">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="left-thumbnail-about-area-two">
                        <img src="{{ asset('website/assets/images/header/4.jpg') }}" class="rounded shadow" alt="about">
                       
                        <div class="counter-about-area">
                            {{-- <h2 class="counter title"><span class="odometer odometer-auto-theme odometer-triggered" data-count="25"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span></div></span>+
                            </h2> --}}
                            <span>Empowering Minds.</span> <br>
                            <span>Transforming Systems.</span>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-7">
                    <div class="about-6-thumbnail-left-wrapper">
                        <div class="single-thumbnail">
                            <img src="{{ asset('website/assets/images/header/4c.jpg')}}" alt="about">
                        </div>
                        <div class="single-thumbnail mt--40">
                            <img src="{{ asset('website/assets/images/header/8.jpg')}}" alt="about">
                        </div>
                        <div class="progress-circle-main-wrapper border shadow rounded">
                            <div class="progress-area-wrapper images-r">
                                <div class="single-progress-circle">
                                    <svg class="radial-progress" data-countervalue="80" viewBox="0 0 80 80">
                                        <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                        <circle class="bar--animated" cx="40" cy="40" r="35" style="stroke-dashoffset: 217.8;"></circle>
                                        <text class="countervalue start" x="50%" y="55%" transform="matrix(0, 1, -1, 0, 80, 0)">80</text>
                                    </svg>
                                </div>
                                <h5 class="title">Business Progress</h5>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-5 pl--30 mt_md--100 mt_sm--100">
                    <div class="about-6-inner-content-content">
                        <div class="title-style-one left mb--30">
                            <span class="pre">Our Unique Identity</span>
                            {{-- <h2 class="title rts-text-anime-style-1">Smart and effective <br>
                                business agency.

                            </h2> --}}
                        </div>
                        <p class="disc text-justify">
                            YOA Global Education Partners is a leading education consultancy committed to driving transformative changes in both local and global education systems. With deep expertise in policy-making, curriculum development, and capacity building, we aim to revolutionize educational practices, policies, and outcomes through strategic advisory services.
Whether you are a school leader, government official, development partner, or private institution we are your trusted ally in shaping effective, inclusive, and future-ready education systems.
                        </p>
                     
                        <a href="{{ route('about') }}" class="rts-btn btn-primary">Read More</a>

                    </div>
                </div>
            </div>
        </div>
        <div class="shape-area">
            <img src="website/assets/images/about/shape/01.svg" alt="shape" class="one">
            <img src="website/assets/images/about/shape/02.svg" alt="shape" class="two">
        </div>
    </div>
    <!-- rts about us area end -->
    
    <div class="boost-your-business-today mt--70">
        <div class="container-2">
            <div class="col-lg-12">
                <div class="business-boost-wrapper-main rts-section-gap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="business-marklting-area-thumb">
                                    <img src="{{ asset('website/assets/images/header/10.jpg') }}" class="shadow" alt="business_area">
                                </div>
                            </div>
                            <div class="col-lg offset-lg-1">
                                <div class="boosting-business-right-area">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="title-style-four center">
                                                <span class="pre">We are not just consultants</span>
                                                <h2 class="title rts-text-anime-style-1">
                                                    Who We Are
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <p class="disc">
                                        We are education reform catalysts. With years of experience in education policy, governance, and systemic reform, we provide insightful and practical solutions <br>
                                        From strategic advisory to on-the-ground implementation, we help clients build stronger, smarter education systems.
                                    </p>
                                    <div class="feature-one-wrapper mt--40 pl_sm--0 row">
                                        <div class="col-lg-6 p-2">
                                            <div class="single-feature-one active ">
                                                <i class="fal fa-check"></i>
                                                <p>Government agencies & ministries of education</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-2">
                                            <div class="single-feature-one ">
                                                <i class="fal fa-check"></i>
                                                <p>Non-governmental organizations (NGOs)
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-2">
                                            <div class="single-feature-one ">
                                                <i class="fal fa-check"></i>
                                                <p>Public and private schools</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-2">
                                            <div class="single-feature-one ">
                                                <i class="fal fa-check"></i>
                                                <p>Higher education institutions</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-2">
                                            <div class="single-feature-one ">
                                                <i class="fal fa-check"></i>
                                                <p>International development partners</p>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="rts-service-area rts-section-gap">
        <div class="container">
            
            <div class="row g-5 mt--10 d-flex justify-content-center">
                <div class="col-lg-5" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2" style="transform: translate(0px, 0px); opacity: 1;">
                    <div class="single-service-style-three ">
                        <div class="inner ">
                            <div class="icon">
                                <img src="{{ asset('website/assets/images/service/icons/04.svg') }}" alt="icon">
                            </div>
                            <a href="#">
                                <h4 class="title">Vision</h4>
                            </a>
                            <p class="disc">
                                To facilitate the transformation of educational systems and institutions by providing strategic consultancy that reinforces the critical role of education and human capital development. 



                            </p>
                            {{-- <a class="read-more" href="#">Learn More <i class="fa-light fa-arrow-right"></i></a> --}}
                        </div>
                    </div>
                </div>
               
                
                <div class="col-lg-5" data-animation="fadeInUp" data-delay="0.8" data-duration="1.2" style="transform: translate(0px, 0px); opacity: 1;">
                    <div class="single-service-style-three ">
                        <div class="inner">
                            <div class="icon">
                                <img src="{{ asset('website/assets/images/service/icons/07.svg') }}" alt="icon">
                            </div>
                            <a href="#">
                                <h4 class="title">Mission</h4>
                            </a>
                            <p class="disc">
                                To deliver high-quality, evidence-based consultancy services to stakeholders in education, enabling them to improve student outcomes, optimize resources, and align with global best practices. 

                            </p>
                            {{-- <a class="read-more" href="service-details.html">Learn More <i class="fa-light fa-arrow-right"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="working-process-area-three rts-section-gap working-process-bg">
        <div class="container">
            <div class="row mt--40">
                <div class="title-style-three center">
                    <span class="pre">The YOA Global Education Partners focus</span>
                    <div class="bg-title">Objectives</div>
                    <h2 class="title rts-text-anime-style-1">Our Objectives</h2>
                </div>
            </div>
            <div class="row g-5 mt--20 align-items-center rts_jump_animation-wrapper">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 rts-jump__item">
                    <!-- single wirking process -->
                    <div class="rts-working-process-1 text-center">
                        <div class="inner">
                            <div class="icon">
                                <img src="{{ asset('website/assets/images/wokring-process/icon/01.svg')}}" alt="Working_process">
                            </div>
                        </div>
                        <div class="content">
                            {{-- <h6 class="title">Make a Plan</h6> --}}
                            <p class="disc">
                                Strengthening education policies and governance at the district, regional and national levels.
                            </p>
                        </div>
                    </div>
                    <!-- single wirking process End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 rts-jump__item">
                    <!-- single wirking process -->
                    <div class="rts-working-process-1 process-lg text-center">
                        <div class="inner two">
                            <div class="icon">
                                <img src="{{ asset('website/assets/images/wokring-process/icon/02.svg')}}" alt="Working_process">
                            </div>
                        </div>
                        <div class="content">
                            {{-- <h6 class="title">Cost Calculating</h6> --}}
                            <p class="disc">
                                Integrating innovative approaches to teaching, learning and governance at the public and private schools.

                            </p>
                        </div>
                    </div>
                    <!-- single wirking process End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 rts-jump__item">
                    <!-- single wirking process -->
                    <div class="rts-working-process-1 text-center">
                        <div class="inner three">
                            <div class="icon">
                                <img src="{{ asset('website/assets/images/wokring-process/icon/03.svg')}}" alt="Working_process">
                            </div>
                        </div>
                        <div class="content">
                            {{-- <h6 class="title">Business Growth</h6> --}}
                            <p class="disc">
                                Ensuring measurable outcomes that align with global education standards.
                            </p>
                        </div>
                    </div>
                    <!-- single wirking process End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 rts-jump__item">
                    <!-- single wirking process -->
                    <div class="rts-working-process-1 process-lg text-center">
                        <div class="inner four">
                            <div class="icon">
                                <img src="{{ asset('website/assets/images/wokring-process/icon/04.svg')}}" alt="Working_process">
                            </div>
                        </div>
                        <div class="content">
                            {{-- <h6 class="title">Success Mission</h6> --}}
                            <p class="disc">
                                Facilitating the development of 21st century curriculum at the pre-tertiary and tertiary level.

                            </p>
                        </div>
                    </div>
                    <!-- single wirking process End -->
                </div>
            </div>
        </div>
    </div>




    <div class="rts-faq-area rts-section-gap faq-bg-one bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-main-wrapper-content-inner-four">
                        <div class="title-style-four left">
                            {{-- <span class="pre">faq</span> --}}
                            <h2 class="title rts-text-anime-style-1">What we 
                                Offer
                            </h2>
                        </div>
                        
                        <div class="accordion mt--40" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" >
                                        Policy Advisory
                                    </button>
                                </h2>
                                
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" >
                                        Institutional Strategy
                                    </button>
                                </h2>
                               
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" >
                                        Digital Transformation in Education
                                    </button>
                                </h2>
                               
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" >
                                        Teacher Training & Professional Development

                                    </button>
                                </h2>
                               
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" >
                                        International Education & Exchange Programs
                                    </button>
                                </h2>
                               
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" >
                                        Impact Assessments & Data Analytics 
                                    </button>
                                </h2>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="faq-one-thumbnail-wrapper-right" data-animation="zoomOut" data-delay="0.2" data-duration="1.2">
                       <div class="row g-3">
                        <div class="col-lg-6 thumnail mb-2">
                            <img src="{{ asset('website/assets/images/header/12.jpg') }}" alt="faq" class="img-fluid rounded">
                        </div>
                        <div class="col-lg-6 mb-2">
                            <img src="{{ asset('website/assets/images/header/11.jpg') }}" alt="faq" class="img-fluid rounded">
                        </div>

                        <div class="col-lg-6 mb-2">
                            <img src="{{ asset('website/assets/images/header/13.jpg') }}" alt="faq" class="img-fluid rounded">
                        </div>

                        <div class="col-lg-6 mb-2">
                            <img src="{{ asset('website/assets/images/header/14.jpg') }}" alt="faq" class="img-fluid rounded">
                        </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="our-experties-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-one eight center mb--30">
                        <span class="pre">What Makes Us the Right Choice</span>
                        <h2 class="title rts-text-anime-style-1 uppercase">Why Choose Us
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row mt--40 g-5 d-flex justify-content-center">
                <div class="col-lg-4">
                    <div class="progress-circle-main-wrapper border shadow rounded">
                        <div class="progress-area-wrapper style-8">
                            <div class="single-progress-circle">
                                <svg class="radial-progress" data-countervalue="80" viewBox="0 0 80 80">
                                    <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                    <circle class="bar--animated" cx="40" cy="40" r="35" style="stroke-dashoffset: 217.8;"></circle>
                                    <text class="countervalue start" x="50%" y="55%" transform="matrix(0, 1, -1, 0, 80, 0)">80</text>
                                </svg>
                            </div>
                            <div class="inner-content">
                                <h5 class="title">Data-Driven & Impact-Focused</h5>
                               
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="progress-circle-main-wrapper border shadow rounded">
                        <div class="progress-area-wrapper style-8">
                            <div class="single-progress-circle">
                                <svg class="radial-progress" data-countervalue="80" viewBox="0 0 80 80">
                                    <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                    <circle class="bar--animated" cx="40" cy="40" r="35" style="stroke-dashoffset: 217.8;"></circle>
                                    <text class="countervalue start" x="50%" y="55%" transform="matrix(0, 1, -1, 0, 80, 0)">80</text>
                                </svg>
                            </div>
                            <div class="inner-content">
                                <h5 class="title">Unmatched Policy Expertise</h5>
                               
                            </div>
                        </div>
                    </div>
                </div>
              
                <div class="col-lg-4">
                    <div class="progress-circle-main-wrapper border shadow rounded">
                        <div class="progress-area-wrapper style-8">
                            <div class="single-progress-circle">
                                <svg class="radial-progress" data-countervalue="80" viewBox="0 0 80 80">
                                    <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                    <circle class="bar--animated" cx="40" cy="40" r="35" style="stroke-dashoffset: 217.8;"></circle>
                                    <text class="countervalue start" x="50%" y="55%" transform="matrix(0, 1, -1, 0, 80, 0)">80</text>
                                </svg>
                            </div>
                            <div class="inner-content">
                                <h5 class="title">Strategic and Collaborative Approach</h5>
                               
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="progress-circle-main-wrapper border shadow rounded">
                        <div class="progress-area-wrapper style-8">
                            <div class="single-progress-circle">
                                <svg class="radial-progress" data-countervalue="80" viewBox="0 0 80 80">
                                    <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                    <circle class="bar--animated" cx="40" cy="40" r="35" style="stroke-dashoffset: 217.8;"></circle>
                                    <text class="countervalue start" x="50%" y="55%" transform="matrix(0, 1, -1, 0, 80, 0)">80</text>
                                </svg>
                            </div>
                            <div class="inner-content">
                                <h5 class="title">Global and Local Insight</h5>
                               
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="progress-circle-main-wrapper border shadow rounded">
                        <div class="progress-area-wrapper style-8">
                            <div class="single-progress-circle">
                                <svg class="radial-progress" data-countervalue="80" viewBox="0 0 80 80">
                                    <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                    <circle class="bar--animated" cx="40" cy="40" r="35" style="stroke-dashoffset: 217.8;"></circle>
                                    <text class="countervalue start" x="50%" y="55%" transform="matrix(0, 1, -1, 0, 80, 0)">80</text>
                                </svg>
                            </div>
                            <div class="inner-content">
                                <h5 class="title">Trusted by Institutions Worldwide</h5>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- start client review area start -->
    <div class="rts-client-review-two bg-black-content rts-section-gapTop bg-client-r-h2">
        <div class="container">
            <div class="row mt--30">
                <div class="title-style-three-between">
                    <div class="title-style-three left">
                        <span class="pre">Our Testimonial</span>
                        <div class="bg-title">04</div>
                        <h2 class="title rts-text-anime-style-1">Our Client Reviews
                        </h2>
                    </div>
                    <div class="button-area">
                        <a href="#" class="rts-btn btn-primary btn-white">See All Reviews</a>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20">
                <div class="col-12">
                    <div class="swiper mySwiperh2_clients">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('website/assets/images/testimonials/avatar/01.webp')}}" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title">David Smith</h6>
                                            </a>
                                            <span>Finance</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc">
                                            “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu
                                            dictums augue
                                            volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img src="{{ asset('website/assets/images/testimonials/icons/01.webp')}}" alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('website/assets/images/testimonials/avatar/02.webp')}}" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title">Mark Jone</h6>
                                            </a>
                                            <span>Finance</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc">
                                            “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu
                                            dictums augue
                                            volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img src="{{ asset('website/assets/images/testimonials/icons/02.webp')}}" alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('website/assets/images/testimonials/avatar/03.webp')}}" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title">Lord Korn</h6>
                                            </a>
                                            <span>Finance</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc">
                                            “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu
                                            dictums augue
                                            volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img src="{{ asset('website/assets/images/testimonials/icons/03.webp')}}" alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('website/assets/images/testimonials/avatar/01.webp')}}" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title">David Smith</h6>
                                            </a>
                                            <span>Finance</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc">
                                            “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu
                                            dictums augue
                                            volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img src="{{ asset('website/assets/images/testimonials/icons/01.webp')}}" alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('website/assets/images/testimonials/avatar/02.webp')}}" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title">Mark Jone</h6>
                                            </a>
                                            <span>Finance</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc">
                                            “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu
                                            dictums augue
                                            volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img src="{{ asset('website/assets/images/testimonials/icons/02.webp')}}" alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('website/assets/images/testimonials/avatar/03.webp')}}" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title">Lord Korn</h6>
                                            </a>
                                            <span>Finance</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc">
                                            “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu
                                            dictums augue
                                            volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img src="{{ asset('website/assets/images/testimonials/icons/03.webp')}}" alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>








    <!-- rts cta area start -->
    <div class="rts-cta-area-one rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-main-area-wrapper-one bg_image">
                        <div class="left-areas">
                             
                            
                            <span class="pre">Let’s discuss about how we can help</span>
                            <h3 class="title">make your business better</h3>
                        </div>
                        <div class="right-area">
                            <div class="inpur-area-main">
                                <button class="rts-btn btn-primary">Get Started!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts cta area end -->





</div>
@endsection