@extends('website.layouts.index')


@section('content')
      
{{-- <div class="rts-breadcrumb-area bg_primary"  style="background-image:url('{{ asset('website/assets/images/header/contact.jpg') }}');background-position:center;background-size:cover; background-repeat:no repeat;">
    <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-area-left center">
                            <span class="bg-title">Contact Us</span>
                            <h1 class="title rts-text-anime-style-1">
                              Our Amazing Team
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
     --}}
 


     <div class="rts-breadcrumb-area" style="background-image:url('{{ asset('website/assets/images/header/20c.jpg') }}');background-position:center;background-size:cover; background-repeat:no repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center">
                        <span class="bg-title">Our Team</span>
                        <h1 class="title text-white">
                            Team Experts
                        </h1>
                        <p class="disc text-white" style="max-width: 45%; margin: auto;">
                            With a team of experienced professionals and a passion for innovation, we combine
                            cutting-edge strategies
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-area">
            <img src="website/assets/images/about/shape/01.png" alt="shape" class="one">
            <img src="website/assets/images/about/shape/02.png" alt="shape" class="two">
            <img src="website/assets/images/about/shape/03.png" alt="shape" class="three">
        </div>
    </div>


    <div class="inner-page-team-area rts-section-gapBottom mt-dec-section-inner">
        <div class="container pb--80">
            <div class="row mt--30 g-5 g-sm-30 mb--80">
               @forelse ($team as $item)
               <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                <div class="single-team-area-one-start">
                    <a href="#" class="thumbnail">
                        <img src="{{ asset($item->image) }}" alt="item">
                    </a>
                    <div class="inner-content shadow border">
                        <div class="text-top">
                            <a href="#">
                                <h5 class="title">{{ $item->name }}</h5>
                            </a>
                            <span>{{ $item->position }}</span>
                        </div>
                        <div class="social-one-wrapper">
                            <ul>

                                @if ($item->fb_link)
                                <li><a href="{{ $item->fb_link }}"><i class="fa-brands fa-facebook-f"></i></a></li>
                            @endif
                            @if ($item->x_link)
                                <li><a href="{{ $item->x_link }}"><i class="fa-brands fa-twitter"></i></a></li>
                            @endif
                            @if ($item->lk_link)
                                <li><a href="{{ $item->lk_link }}"><i class="fa-brands fa-instagram"></i></a></li>
                            @endif


                                
                               
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
               @empty
               <div class="mx-auto col-lg-4 col-md-6 col-sm-12 col-12" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                <div class="single-team-area-one-start">
                   
                    <div class="inner-content shadow border">
                        <div class="text-top">
                           
                            <h4 class="text-center mt-">No Data Available</h4>
                        </div>
                        
                    </div>
                </div>
            </div>
                   
               @endforelse
              
              
            </div>
     
        </div>
    </div>
@endsection