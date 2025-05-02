@extends('website.layouts.index')


@section('content')
      
<div class="rts-breadcrumb-area bg_primary"  style="background-image:url('{{ asset('website/assets/images/header/20c.jpg') }}');background-position:center;background-size:cover; background-repeat:no repeat;">
    <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-area-left center">
                            <span class="bg-title">{{ $id }}</span>
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
                
                @break
            @default
                
        @endswitch
        
      
  
    

@endsection