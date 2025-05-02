@extends('website.layouts.index')


@section('content')
      
<div class="rts-breadcrumb-area bg_primary"  style="background-image:url('{{ asset('website/assets/images/header/19c.jpg') }}');background-position:center;background-size:cover; background-repeat:no repeat;">
    <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-area-left center">
                            <span class="bg-title">Services</span>
                            <h1 class="title rts-text-anime-style-1">
                                Our Services
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
    
    <div class="boost-your-business-today">
        <div class="container-2">
            <div class="col-lg-12">
                <div class="business-boost-wrapper-main rts-section-gap">
                    <div class="container">
                        <div class="row">
                           
                            <div class="col-lg-6 mx-auto">
                                <div class="boosting-business-right-area">
                             
                                    <p class="disc">
                                        We assist our clients (both national and international) in planning, organising, and overseeing extensive projects that call for a thorough technical, and practical grasp of how government operates. Our services are under two (2) main programs
                                    </p>
                                    <div class="feature-one-wrapper mt--40 pl_sm--0">
                                        <div class="single-feature-one active m-3">
                                            <i class="fal fa-check"></i>
                                            <p>Country level reforms</p>
                                        </div>
                                        <div class="single-feature-one m-3">
                                            <i class="fal fa-check"></i>
                                            <p>Whole School Reform</p>
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


    <div class="rts-pricing-area-one rts-section-gap">
        <div class="container">
            
            <div class="row ">
                <div class="col-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row g-5">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12 d-flex align-items-stretch d-flex align-items-stretch">
                                    <div class="pricing-wrapper-one shadow border rounded">
                                        
                                        <div class="pricing-header-start">
                                            {{-- <span class="pre-title">Starter Package</span> --}}
                                            <h4 class="title">
                                                Policy Advisory
                                            </h4>
                                        </div>
                                      
                                        <div class="pricing-body">
                                            
                                            <div class="single-pricing ">
                                               
                                                <span class="price-details">Education policy forms the backbone of national development, shaping how learning systems function, how resources are distributed, and how equity is promoted. At YOA Global Education Partners, we support governments in designing and reforming education policies...</span>
                                            </div>
                                          
                                            <a class="rts-btn btn-primary" href="{{ route('services.detail','Policy Advisory') }}">Read More</a>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12 d-flex align-items-stretch">
                                    <div class="pricing-wrapper-one shadow border rounded">
                                        
                                        <div class="pricing-header-start">
                                            {{-- <span class="pre-title">Starter Package</span> --}}
                                            <h4 class="title">
                                                Institutional Strategy

                                            </h4>
                                        </div>
                                      
                                        <div class="pricing-body">
                                            
                                            <div class="single-pricing ">
                                               
                                                <span class="price-details">Effective institutions are the engine rooms of a strong education system. We work closely with schools, colleges, and education ministries to shape strategic plans that are forward-thinking, results-driven, and rooted in both global standards and local realities.</span>
                                            </div>
                                          
                                            <a class="rts-btn btn-primary" href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-12 d-flex align-items-stretch">
                                    <div class="pricing-wrapper-one shadow border rounded">
                                        
                                        <div class="pricing-header-start">
                                            {{-- <span class="pre-title">Starter Package</span> --}}
                                            <h4 class="title">
                                                Digital Transformation in Education
                                            </h4>
                                        </div>
                                      
                                        <div class="pricing-body">
                                            
                                            <div class="single-pricing ">
                                               
                                                <span class="price-details">In a rapidly changing digital world, integrating technology into education is no longer optional it is essential. YOA Global Education Partners helps educational institutions harness the power of technology to improve teaching, learning, and administration.</span>
                                            </div>
                                          
                                            <a class="rts-btn btn-primary" href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-12 d-flex align-items-stretch">
                                    <div class="pricing-wrapper-one shadow border rounded">
                                        
                                        <div class="pricing-header-start">
                                            {{-- <span class="pre-title">Starter Package</span> --}}
                                            <h4 class="title">
                                                Teacher Training & Professional Development
                                            </h4>
                                        </div>
                                      
                                        <div class="pricing-body">
                                            
                                            <div class="single-pricing ">
                                               
                                                <span class="price-details">Teachers are the heart of any education system, and their continuous development is key to educational success. At YOA Global Education Partners, we design and deliver high-impact professional development programs that empower teachers with modern pedagogical...</span>
                                            </div>
                                          
                                            <a class="rts-btn btn-primary" href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-12 d-flex align-items-stretch">
                                    <div class="pricing-wrapper-one shadow border rounded">
                                        
                                        <div class="pricing-header-start">
                                            {{-- <span class="pre-title">Starter Package</span> --}}
                                            <h4 class="title">
                                                International Education & Exchange Programs
                                            </h4>
                                        </div>
                                      
                                        <div class="pricing-body">
                                            
                                            <div class="single-pricing ">
                                               
                                                <span class="price-details">Cross-border collaboration enriches educational experience by promoting diversity, global awareness, and intercultural competencies. YOA Global Education Partners facilitates international education initiatives that connect learners, educators, and institutions around the world.</span>
                                            </div>
                                          
                                            <a class="rts-btn btn-primary" href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-12 d-flex align-items-stretch justify-content-between">
                                    <div class="pricing-wrapper-one shadow border rounded">
                                        
                                        <div class="pricing-header-start">
                                            {{-- <span class="pre-title">Starter Package</span> --}}
                                            <h4 class="title">
                                                Impact Assessments & Data Analytics
                                            </h4>
                                        </div>
                                      
                                        <div class="pricing-body">
                                            
                                            <div class="single-pricing ">
                                               
                                                <span class="price-details">To achieve meaningful reform, education systems must be able to track what works, what doesn’t, and why. YOA Global Education Partners specializes in designing and conducting comprehensive impact assessments to evaluate the performance of programs, institutions, and policies.</span>
                                            </div>
                                          
                                            <a class="rts-btn btn-primary" href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-12 d-flex align-items-stretch">
                                    <div class="pricing-wrapper-one shadow border rounded">
                                        
                                        <div class="pricing-header-start">
                                            {{-- <span class="pre-title">Starter Package</span> --}}
                                            <h4 class="title">
                                                Development of School Infrastructure
                                            </h4>
                                        </div>
                                      
                                        <div class="pricing-body">
                                            
                                            <div class="single-pricing ">
                                               
                                                <span class="price-details">A conducive learning environment is fundamental to effective education. At YOA Global Education Partners, we support the development and transformation of school infrastructure to ensure that educational facilities are safe, inclusive, and optimized for 21st-century learning. </span>
                                            </div>
                                          
                                            <a class="rts-btn btn-primary" href="#">Read More</a>
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
    

@endsection