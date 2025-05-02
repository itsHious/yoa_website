@extends('website.layouts.index')


@section('content')
      


    @switch($id)
        @case('Policy Advisory')
        <div class="rts-breadcrumb-area bg_primary"  style="background-image:url('{{ asset('website/assets/images/header/20c.jpg') }}');background-position:center;background-size:cover; background-repeat:no repeat;">
            @break
        @case('Institutional Strategy')
        <div class="rts-breadcrumb-area bg_primary"  style="background-image:url('{{ asset('website/assets/images/header/22.jpg') }}');background-position:center;background-size:cover; background-repeat:no repeat;">
            @break

            @case('Digital Transformation in Education')
            <div class="rts-breadcrumb-area bg_primary"  style="background-image:url('{{ asset('website/assets/images/header/23.jpg') }}');background-position:center;background-size:cover; background-repeat:no repeat;">
                @break

                @case('Teacher Training & Professional Development')
                <div class="rts-breadcrumb-area bg_primary"  style="background-image:url('{{ asset('website/assets/images/header/24c.jpg') }}');background-position:center;background-size:cover; background-repeat:no repeat;">
                    @break

                    @case('International Education & Exchange Programs')
                    <div class="rts-breadcrumb-area bg_primary"  style="background-image:url('{{ asset('website/assets/images/header/25.jpg') }}');background-position:top;background-size:cover; background-repeat:no repeat;">
                        @break
        @default
            
    @endswitch



    <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-area-left center">
                            {{-- <span class="bg-title">{{ $id }}</span> --}}
                            <h1 class="title rts-text-anime-style-1">
                                {{ $id }}
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
    

        @switch($id)
            @case('Policy Advisory')
            <div class="rts-service-area-start rts-sectiong-gap">
                <div class="container padding-extend-100">
                    <div class="row">
                        <div class="col-lg-6 pr--30 pr_sm--10">
                            <section class="main-wrapper-sticky">
                                <p class="disc text-justify">
                                    Education policy forms the backbone of national development, shaping how learning systems function, how resources are distributed, and how equity is promoted. At YOA Global Education Partners, we support governments in designing and reforming education policies that are inclusive, responsive, and aligned with international best practices. Whether the focus is on early childhood development, primary education, or tertiary systems, we offer tailored advisory services that reflect the unique socio-economic realities of each country or region.
                                </p>
                                <p class="disc">
                                    Our work includes the development of policy frameworks, implementation roadmaps, and regulatory guidelines that empower education ministries and related institutions to manage change effectively. We assist in creating evidence-based policies grounded in data, research, and stakeholder engagement to ensure broad ownership and long-term sustainability. Our advisors bring deep technical experience and insight into governance structures, financing models, and institutional accountability.
                
                                </p>
                                <p class="disc">
                                    Additionally, we guide institutions through the regulatory landscape, helping them navigate national and international compliance requirements. Whether aligning with SDGs, UNESCO benchmarks, or national accreditation standards, we ensure clients meet all necessary criteria while maintaining flexibility to innovate and grow. Through our policy advisory services, we aim to strengthen education systems and contribute to national transformation agendas.
                
                                </p>
                            </section>
                        </div>
                        <div class="col-lg-6">
                           <img src="{{ asset('website/assets/images/header/21.jpg') }}" class="img-fluid rounded" alt="">
                            <div class="service-arrow-bottom-main">
                                <img src="{{ asset('website/assets/images/banner/shape/08.png') }}" alt="service">
                            </div>
                        </div>
                    </div>
                    <div class="row rts-section-gap">
                        <div class="col-lg-12">
                            <div class="service-bottom-cta">
                                <h5 class="title">Let's get a conversation Started</h5>
                                <div class="right">
                                    <p>Call Us! <a href="#">+(125) 2153-2158</a></p>
                                </div>
                                <div class="mid-image">
                                    <img src="{{ asset('website/assets/images/service/01.png') }}" alt="service_image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @break
            @case('Institutional Strategy')
            <div class="rts-service-area-start rts-sectiong-gap">
                <div class="container padding-extend-100">
                    <div class="row">
                        <div class="col-lg-6 pr--30 pr_sm--10">
                            <section class="main-wrapper-sticky">
                                <p class="disc text-justify">
                                    Effective institutions are the engine rooms of a strong education system. We work closely with schools, colleges, and education ministries to shape strategic plans that are forward-thinking, results-driven, and rooted in both global standards and local realities. Our strategic advisory support includes institutional reviews, vision development, and operational planning to enhance overall performance.
                                </p>
                                <p class="disc">
                                    A key component of our service is curriculum development. We support institutions in reimagining their curricula to reflect 21st-century skills, technological trends, and emerging societal needs. Our approach is inclusive, involving educators, learners, and communities to ensure curricula are practical, culturally relevant, and future-ready. By aligning content with global educational benchmarks and local values, we promote better learning outcomes and lifelong learning pathways.
                
                                </p>
                                <p class="disc">
                                    We also invest in leadership development by equipping educational leaders with the tools and mindset needed to manage change and drive excellence. Through customized training programs, coaching, and peer learning initiatives, we help leaders at all levels school heads, administrators, and policymakers—enhance their strategic thinking, decision-making, and governance capabilities. This strengthens institutional resilience and cultivates a culture of innovation and accountability.

                
                                </p>
                            </section>
                        </div>
                        <div class="col-lg-6">
                           <img src="{{ asset('website/assets/images/header/22c.jpg') }}" class="img-fluid rounded" alt="">
                            <div class="service-arrow-bottom-main">
                                <img src="{{ asset('website/assets/images/banner/shape/08.png') }}" alt="service">
                            </div>
                        </div>
                    </div>
                    <div class="row rts-section-gap">
                        <div class="col-lg-12">
                            <div class="service-bottom-cta">
                                <h5 class="title">Let's get a conversation Started</h5>
                                <div class="right">
                                    <p>Call Us! <a href="#">+(125) 2153-2158</a></p>
                                </div>
                                <div class="mid-image">
                                    <img src="{{ asset('website/assets/images/service/01.png') }}" alt="service_image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @break

                @case('Digital Transformation in Education')
                <div class="rts-service-area-start rts-sectiong-gap">
                    <div class="container padding-extend-100">
                        <div class="row">
                            <div class="col-lg-6 pr--30 pr_sm--10">
                                <section class="main-wrapper-sticky">
                                    <p class="disc text-justify">
                                        In a rapidly changing digital world, integrating technology into education is no longer optional it is essential. YOA Global Education Partners helps educational institutions harness the power of technology to improve teaching, learning, and administration. Our digital transformation services are designed to bridge the digital divide and enable inclusive, flexible, and engaging learning experiences.

                                    </p>
                                    <p class="disc">
                                        We assess institutional readiness and help design robust digital strategies that support blended and online learning environments. Our team guides schools and universities in selecting appropriate learning management systems (LMS), digital content platforms, and data tools that align with their pedagogical goals. We also support infrastructure planning to ensure that digital solutions are scalable, secure, and sustainable over time.

                    
                                    </p>
                                    <p class="disc">
                                        Beyond technology deployment, we emphasize building the human and organizational capacity to use digital tools effectively. We work with teachers, administrators, and IT personnel to promote digital literacy, instructional design, and tech-enabled classroom management. Our approach ensures that digital transformation enhances not disrupts the quality of education delivery and administration.

    
                    
                                    </p>
                                </section>
                            </div>
                            <div class="col-lg-6">
                               <img src="{{ asset('website/assets/images/header/23c.jpg') }}" class="img-fluid rounded" alt="">
                                <div class="service-arrow-bottom-main">
                                    <img src="{{ asset('website/assets/images/banner/shape/08.png') }}" alt="service">
                                </div>
                            </div>
                        </div>
                        <div class="row rts-section-gap">
                            <div class="col-lg-12">
                                <div class="service-bottom-cta">
                                    <h5 class="title">Let's get a conversation Started</h5>
                                    <div class="right">
                                        <p>Call Us! <a href="#">+(125) 2153-2158</a></p>
                                    </div>
                                    <div class="mid-image">
                                        <img src="{{ asset('website/assets/images/service/01.png') }}" alt="service_image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    @break



                    @case('Teacher Training & Professional Development')
                    <div class="rts-service-area-start rts-sectiong-gap">
                        <div class="container padding-extend-100">
                            <div class="row">
                                <div class="col-lg-6 pr--30 pr_sm--10">
                                    <section class="main-wrapper-sticky">
                                        <p class="disc text-justify">
                                            Teachers are the heart of any education system, and their continuous development is key to educational success. At YOA Global Education Partners, we design and deliver high-impact professional development programs that empower teachers with modern pedagogical skills, subject mastery, and adaptive teaching strategies. Our workshops, seminars, and coaching sessions are evidence-based and aligned with international teaching standards.

    
                                        </p>
                                        <p class="disc">
                                            Our training modules cover a wide range of critical areas, including inclusive education, student-centered learning, classroom management, assessment literacy, and digital teaching skills. We use interactive, practice-oriented methods that encourage reflective learning and peer collaboration. These programs are delivered in both face-to-face and virtual formats, making them accessible to educators regardless of location.

    
                        
                                        </p>
                                        <p class="disc">
                                            We also support the development of national and institutional teacher training frameworks, helping governments and schools embed professional development into their education systems. Our goal is to build a community of confident, well-equipped educators who can adapt to the evolving needs of learners and contribute meaningfully to education reform. We take pride in transforming teaching into a lifelong learning journey.

                        
                                        </p>
                                    </section>
                                </div>
                                <div class="col-lg-6">
                                   <img src="{{ asset('website/assets/images/header/24.jpg') }}" class="img-fluid rounded" alt="">
                                    <div class="service-arrow-bottom-main">
                                        <img src="{{ asset('website/assets/images/banner/shape/08.png') }}" alt="service">
                                    </div>
                                </div>
                            </div>
                            <div class="row rts-section-gap">
                                <div class="col-lg-12">
                                    <div class="service-bottom-cta">
                                        <h5 class="title">Let's get a conversation Started</h5>
                                        <div class="right">
                                            <p>Call Us! <a href="#">+(125) 2153-2158</a></p>
                                        </div>
                                        <div class="mid-image">
                                            <img src="{{ asset('website/assets/images/service/01.png') }}" alt="service_image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        @break


                        @case('International Education & Exchange Programs')
                        <div class="rts-service-area-start rts-sectiong-gap">
                            <div class="container padding-extend-100">
                                <div class="row">
                                    <div class="col-lg-6 pr--30 pr_sm--10">
                                        <section class="main-wrapper-sticky">
                                            <p class="disc text-justify">
                                                Cross-border collaboration enriches educational experience by promoting diversity, global awareness, and intercultural competencies. YOA Global Education Partners facilitates international education initiatives that connect learners, educators, and institutions around the world. Our exchange programs promote cultural understanding, professional networking, and shared learning opportunities.

    
        
                                            </p>
                                            <p class="disc">
                                                We work with governments, schools, universities, and development agencies to design and manage exchange programs, scholarships, study tours, and institutional partnerships. These programs are tailored to achieve specific goals such as academic enrichment, language immersion, research collaboration, or policy benchmarking. Whether it's a student exchange, a teacher development tour, or a bilateral institutional partnership, we ensure meaningful and measurable outcomes.

        
                            
                                            </p>
                                            <p class="disc">
                                                We support institutions aligning with international education frameworks and accreditation systems. We guide them through application processes, partnership agreements, and compliance with global standards. Our global network and expertise allow us to serve as a trusted bridge between local institutions and international opportunities.

                            
                                            </p>
                                        </section>
                                    </div>
                                    <div class="col-lg-6">
                                       <img src="{{ asset('website/assets/images/header/25c.jpg') }}" class="img-fluid rounded" alt="">
                                        <div class="service-arrow-bottom-main">
                                            <img src="{{ asset('website/assets/images/banner/shape/08.png') }}" alt="service">
                                        </div>
                                    </div>
                                </div>
                                <div class="row rts-section-gap">
                                    <div class="col-lg-12">
                                        <div class="service-bottom-cta">
                                            <h5 class="title">Let's get a conversation Started</h5>
                                            <div class="right">
                                                <p>Call Us! <a href="#">+(125) 2153-2158</a></p>
                                            </div>
                                            <div class="mid-image">
                                                <img src="{{ asset('website/assets/images/service/01.png') }}" alt="service_image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @break
            @default
                
        @endswitch
        
      
  
    

@endsection