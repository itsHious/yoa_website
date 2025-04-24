@extends('website.layouts.index')

@section('content')
<div class="page-wrapper radious-none-button">

    <div class="banner-seven-swiper-wrapper" id="home">

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
    </div>



    <!-- rts about us area start -->
    <div class="rts-about-area-two rts-section-gap" id="about">
        <div class="container pb--40">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7">
                    <div class="about-6-thumbnail-left-wrapper">
                        <div class="single-thumbnail">
                            <img src="{{ asset('website/assets/images/about/12.webp')}}" alt="about">
                        </div>
                        <div class="single-thumbnail mt--40">
                            <img src="{{ asset('website/assets/images/about/13.webp')}}" alt="about">
                        </div>
                        <div class="progress-circle-main-wrapper">
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
                </div>
                <div class="col-lg-5 pl--30 mt_md--100 mt_sm--100">
                    <div class="about-6-inner-content-content">
                        <div class="title-style-one left mb--30">
                            <span class="pre">Our Unique Identity</span>
                            {{-- <h2 class="title rts-text-anime-style-1">Smart and effective <br>
                                business agency.

                            </h2> --}}
                        </div>
                        <p class="disc">
                            YOA Global Education Partners is a leading education consultancy committed to driving transformative changes in both local and global education systems. With deep expertise in policy-making, curriculum development, and capacity building, we aim to revolutionize educational practices, policies, and outcomes through strategic advisory services.
Whether you are a school leader, government official, development partner, or private institution we are your trusted ally in shaping effective, inclusive, and future-ready education systems.
                        </p>
                     
                        <a href="about.html" class="rts-btn btn-primary">Read More</a>

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
                                    <img src="website/assets/images/business/01.webp" class="shadow" alt="business_area">
                                </div>
                            </div>
                            <div class="col-lg offset-lg-1">
                                <div class="boosting-business-right-area">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="title-style-four center">
                                                <span class="pre">We are not just consultants</span>
                                                <h2 class="title rts-text-anime-style-1">
                                                    Who <span>We</span> Are
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
                                <span>Offer</span>
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
                <div class="col-lg-6">
                    <div class="faq-one-thumbnail-wrapper-right" data-animation="zoomOut" data-delay="0.2" data-duration="1.2">
                        <div class="thumbnail">
                            <img src="{{ asset('website/assets/images/faq/01.webp') }}" alt="faq">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


   

    <div class="rts-why-choose-us-section-8" id="about">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="why-choose-us-thumbnail">
                        <img src="{{ asset('website/assets/images/why-choose/10.webp') }}" alt="why">
                    </div>
                </div>
                <div class="col-lg-6 pl--50 pl_sm--10 mt_md--50 mt_sm--50 pb_md--50 pb_sm--40">
                    <div class="why-choose-8-wrapper-content">
                        <div class="title-style-five mb--40">
                            <span class="pre">Why Work with Us?
                            </span>
                            {{-- <h2 class="title rts-text-anime-style-1">Expert Solutions for Your <br> Global Business</h2> --}}
                        </div>
                        <div class="single-feature-service-wrapper-8">
                            <div class="icon">
                                <img src="{{ asset('website/assets/images/why-choose/icons/08.svg')}}" alt="service">
                            </div>
                            <div class="inner-wrapper">
                                <h4 class="title">Data-Driven & Impact-Focused
                                </h4>
                             
                            </div>
                        </div>
                        <div class="single-feature-service-wrapper-8">
                            <div class="icon">
                                <img src="{{ asset('website/assets/images/why-choose/icons/08.svg')}}" alt="service">
                            </div>
                            <div class="inner-wrapper">
                                <h4 class="title">Unmatched Policy Expertise
</h4>
                               
                            </div>
                        </div>
                       

                      

                        <div class="single-feature-service-wrapper-8">
                            <div class="icon">
                                <img src="{{ asset('website/assets/images/why-choose/icons/08.svg')}}" alt="service">
                            </div>
                            <div class="inner-wrapper">
                                <h4 class="title">Strategic and Collaborative Approach
                                </h4>
                             
                            </div>
                        </div>
                        <div class="single-feature-service-wrapper-8">
                            <div class="icon">
                                <img src="{{ asset('website/assets/images/why-choose/icons/08.svg')}}" alt="service">
                            </div>
                            <div class="inner-wrapper">
                                <h4 class="title">Global and Local Insight
                                </h4>
                             
                            </div>
                        </div>
                        <div class="single-feature-service-wrapper-8">
                            <div class="icon">
                                <img src="{{ asset('website/assets/images/why-choose/icons/08.svg')}}" alt="service">
                            </div>
                            <div class="inner-wrapper">
                                <h4 class="title">Trusted by Institutions Worldwide
                                </h4>
                             
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