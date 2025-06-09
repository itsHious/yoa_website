@extends('website.layouts.index')


@section('content')
      
        <div class="rts-breadcrumb-area bg_primary"  style="background-image:url('{{ asset('website/assets/images/header/7.jpg') }}');background-position:center;background-size:cover; background-repeat:no repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-area-left center">
                            {{-- <span class="bg-title">About Us</span> --}}
                             <h1 class="title rts-text-anime-style-1">
                                About Us
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-area">
                <img src="{{ asset('website/assets/images/about/shape/01.png')}}" alt="shape" class="one">
                <img src="{{ asset('website/assets/images/about/shape/02.png')}}" alt="shape" class="two">
                <img src="{{ asset('website/assets/images/about/shape/03.png')}}" alt="shape" class="three">
            </div>
        </div>
        <!-- about us area wrapper main end -->
    


          <!-- company history area start -->
    <div class="our-conpamy-history rts-section-gapTop">
        <div class="container">
            <div class="row">
                <p class="disc text-justify">
                    At YOA Global Education Partners, we understand that education plays a critical role in the socio-economic transformation of nations. As highlighted by economist Becker (1962), individuals can improve their human capital by acquiring new skills, knowledge, and abilities, leading to better employment opportunities, increased earnings, and improved overall well-being. However, despite its importance, the education sector across many regions faces deep-rooted challenges such as unequal access, outdated curricula, poor learning outcomes, and the limited use of technology. These issues have only been magnified by global events like the COVID-19 pandemic, which disrupted learning and widened existing educational gaps.

                </p>
               
            </div>
            <div class="mt-5 rts-about-area-start rts-section-gapBottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="thumbnail-about-10-wrapper">
                                <img src="{{ asset('website/assets/images/header/ic.jpg') }}" alt="abotu">
                                <div class="top-counter-area">
                                    <div class="icon">
                                        <img src="website/assets/images/about/icons/08.svg" alt="about">
                                    </div>
                                   
                                    <p>Empowering Minds</p>
                                </div>
                                <div class="top-counter-area bottom">
                                    <div class="icon">
                                        <img src="website/assets/images/about/icons/09.svg" alt="about">
                                    </div>
                                  
                                    <p>Transforming Systems</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt_md--50 mt_sm--50">
                               
                            <p class="disc text-justify ">
                                Our mission is to confront these challenges head-on by working with schools, government departments, development organizations, and private institutions to improve education systems and outcomes. We believe that equitable, quality education is the key to building resilient communities, reducing poverty, and enhancing national productivity. Through innovative thinking, collaborative partnerships, and a shared passion for progress, we design and implement solutions that transform ideas into action.
                            </p>
                                    <p class="disc text-justify">
                                        Our team, led by the former Minister for Education of Ghana, consists of individuals with high-level experience in the Ministry of Education and related departments. Their diverse backgrounds, technical skills, and personal experiences equip us to provide clients with valuable, context-specific advice and support. As the CEO of YOA Global Education Partners, Dr. Yaw Osei Adutwum brings a wealth of knowledge in education reform and transformation, having made significant contributions to systems in both the United States and Ghana. His leadership anchors our strategic direction and commitment to excellence.
    
                                    </p>
                                    <p class="disc text-justify">
                                        With this blend of visionary leadership and technical expertise, our consultancy is uniquely positioned to deliver impactful results. We bring together deep policy insight, global perspectives, and a hands-on approach to drive meaningful reform. At YOA Global Education Partners, we don’t just offer consultancy—we deliver transformation, helping shape education systems that are inclusive, adaptive, and ready for the future.
    
                                    </p>
                        </div>
                    </div>
                </div>
            </div>
         
        </div>
    </div>
    <!-- company history area end -->
    <div class="rts-service-area rts-section-gap bg_image bg_team-area-five">
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

    {{-- <div class="rts-latest-service-area mt-5 rts-section-gapBottom bg-main" style="padding-top:60px">
        <div class="container">
            <div class="row" >
                <div class="col-lg-12">

                    <div class="title-style-one center">
                        <span class="pre">Guiding Principles That Shape Our Work
                        </span>
                        <h2 class="title rts-text-anime-style-1">Our Core Values
                        </h2>
                        <p class="text-center text-white">At YOA Global Education Partners, our work is grounded in a set of core values that define who we are, how we operate, and what we stand for. These values guide every partnership, every decision, and every solution we deliver.
                        </p>
                    </div>
                </div>
                <div class="col-lg-12 mt--50">
                    <section class="main-wrapper-sticky">
                        <div class="sticky-statement border shadow">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="{{ asset('website/assets/images/service/01.svg')}}" alt="service">
                                </div>
                                <h5 class="title">Integrity</h5>
                            </div>
                            <div class="right">
                                <p class="disc">
                                    We uphold the highest ethical standards in all our engagements. Transparency, honesty, and accountability are central to the way we work with clients, partners, and communities.

                                </p>
                              
                            </div>
                        </div>
                        <div class="sticky-statement border shadow">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="{{ asset('website/assets/images/service/02.svg')}}" alt="service">
                                </div>
                                <h5 class="title">Excellence</h5>
                            </div>
                            <div class="right">
                                <p class="disc">
                                    We are committed to delivering high-quality, evidence-based solutions that lead to measurable and lasting impact. We strive for innovation and continuous improvement in everything we do.

                                </p>
                               
                            </div>
                        </div>
                        <div class="sticky-statement border shadow">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="{{ asset('website/assets/images/service/03.svg')}}" alt="service">
                                </div>
                                <h5 class="title">Collaboration</h5>
                            </div>
                            <div class="right">
                                <p class="disc">
                                    We believe in the power of partnerships. By working closely with stakeholders at all levels, we co-create effective and sustainable education solutions tailored to unique contexts.

                                </p>
                               
                            </div>
                        </div>
                       

                        <div class="sticky-statement border shadow">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="{{ asset('website/assets/images/service/02.svg')}}" alt="service">
                                </div>
                                <h5 class="title">Equity & Inclusion</h5>
                            </div>
                            <div class="right">
                                <p class="disc">
                                    We champion access to quality education for all—regardless of background, gender, ability, or location. Our work is guided by a commitment to fairness, inclusivity, and social justice.

                                </p>
                               
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="rts-service-area pt--40 pb--60">
       
        <div class="container-2 mt--30" style="margin-top: 120px">
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-bg-style-one-wrapper">
                        <div class="row">
                            <div class="col-lg">
                                <div class="title-style-four text-center">
                                    {{-- <span class="pre ">Guiding Principles That Shape Our Work</span> --}}
                                    <h5 class="title rts-text-anime-style-2"> Our Core Values</h5>
                                </div>
                                <p>At YOA Global Education Partners, our work is grounded in a set of core values that define who we are, how we operate, and what we stand for. These values guide every partnership, every decision, and every solution we deliver.
                                </p>
                            </div>
                            <div class="col-lg-8">
                                <div class="service-style-swiper-wrapper-two">
                                    <div class="swiper mySwiper-service-1">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="single-service-signle-wrapper">
                                                  
                                                    <div class="information">
                                                        <h5 class="title text-center">Integrity</h5>
                                                        <p class="disc text-center">
                                                            We uphold the highest ethical standards in all our engagements. Transparency, honesty, and accountability are central to the way we work with clients, partners, and communities.

                                                        </p>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-service-signle-wrapper">
                                                  
                                                    <div class="information">
                                                        <h5 class="title text-center">Excellence</h5>
                                                        <p class="disc text-center">
                                                            We are committed to delivering high-quality, evidence-based solutions that lead to measurable and lasting impact. We strive for innovation and continuous improvement in everything we do.
                                                        </p>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-service-signle-wrapper">
                                                  
                                                    <div class="information">
                                                        <h5 class="title text-center">Collaboration</h5>
                                                        <p class="disc text-center">
                                                            We believe in the power of partnerships. By working closely with stakeholders at all levels, we co-create effective and sustainable education solutions tailored to unique contexts.

                                                        </p>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-service-signle-wrapper">
                                                 
                                                    <div class="information">
                                                        <h5 class="title text-center">Equity & Inclusion</h5>
                                                        <p class="disc text-center">
                                                            We champion access to quality education for all—regardless of background, gender, ability, or location. Our work is guided by a commitment to fairness, inclusivity, and social justice.

                                                        </p>
                                                       
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="single-service-signle-wrapper">
                                                 
                                                    <div class="information">
                                                        <h5 class="title text-center">Innovation</h5>
                                                        <p class="disc text-center">
                                                            We embrace new ideas, technologies, and approaches to tackle complex educational challenges. Our solutions are forward-thinking, adaptive, and responsive to the evolving needs of education systems.


                                                        </p>
                                                       
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="single-service-signle-wrapper">
                                                 
                                                    <div class="information">
                                                        <h5 class="title text-center">Impact</h5>
                                                        <p class="disc text-center">
                                                            Everything we do is focused on achieving real, measurable results. We are driven by the belief that education has the power to transform lives and communities.



                                                        </p>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rts-brand-area rts-section-gap pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-client-client text-center mb-5">
                        <p class="client-title">Our Trusted Partners</p>
                    </div>
                    <div class="brand-style-two-wrapper">
                        <div class="swiper mySwiper-brand-2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="single-brand">
                                        <img src="{{ asset('website/assets/images/partners/aves.jpg') }}" alt="brand">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-brand">
                                        <img src="{{ asset('website/assets/images/partners/wb.png') }}" alt="brand">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-brand">
                                        <img src="{{ asset('website/assets/images/partners/aves_2.png') }}" alt="brand">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-brand">
                                        <img src="{{ asset('website/assets/images/partners/big_win.png') }}" alt="brand">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-brand">
                                        <img src="{{ asset('website/assets/images/partners/moe.png') }}" alt="brand">
                                    </div>
                                </div>

                                 
                               
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection