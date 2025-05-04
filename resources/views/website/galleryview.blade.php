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
 


     <div class="rts-breadcrumb-area" style="background-image:url('{{ asset('website/assets/images/header/18bc.jpg') }}');background-position:center;background-size:cover; background-repeat:no repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center">
                        <span class="bg-title">Our Gallery</span>
                        <h1 class="title text-white">
                           {{  $cat->name }}
                        </h1>
                        {{-- <p class="disc text-white" style="max-width: 45%; margin: auto;">
                            With a team of experienced professionals and a passion for innovation, we combine
                            cutting-edge strategies
                        </p> --}}
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


    <div class="project-details-wrapper-image-top rts-section-gap">
        <section id="gallery">
            <div class="container">
                <div id="image-gallery">
                    <div class="row">
                       @forelse ($img as $item)
                       <div class="col-lg-4 image">
                        <div class="img-wrapper">
                            <a href="{{ asset($item->img) }}"><img alt="images" src="{{ asset($item->img) }}" class="rounded shadow img-responsive"></a>
                            <div class="img-overlay">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                       @empty
                           <h4 class="text-center">No Posts Available</h4>
                       @endforelse
                       
                     
                       
                    </div><!-- End row -->
                </div><!-- End image gallery -->
            </div><!-- End container -->
           
        </section>
        
  
    </div>
@endsection