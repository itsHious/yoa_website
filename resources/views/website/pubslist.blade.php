@extends('website.layouts.index')


@section('content')
      



     <div class="rts-breadcrumb-area" style="background-image:url('{{ asset('website/assets/images/header/18bc.jpg') }}');background-position:center;background-size:cover; background-repeat:no repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center">
                        <span class="bg-title">Recent Publications</span>
                        <h1 class="title text-white">
                            Pur Publications
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


    <div class="rts-blog-list-area rts-section-gapBottom padding-extend-100 ">
        <div class="container">
            <div class="row g-5">
              
                       @forelse ($news as $item)
                       <div class="col-lg-4" data-animation="fadeInUp" data-delay="0.4">
                        <div class="p-3 bg-yoa shadow rounded single-blog-area-one column-reverse">
                            <p class="text-white">{{date('d M, Y',strtotime($item->updated_at)) }}</p>
                            <a href="{{ route('web.news.view',$item->id) }}">
                                <h5 class="title text-white">{{ $item->title }}</h5>
                            </a>
                            <div class="bottom-details">
                                <a href="{{ route('web.news.view',$item->id) }}" class="thumbnai">
                                    <img src="{{ asset($item->cover_img) }}" style="height: 250px;
                                    width: 100%;
                                    object-fit: cover;" class="img-fluid rounded" alt="blog-area">
                                </a>
                            </div>
                        </div>
                    </div>
                       @empty
                           <h4 class="text-center">
                            No posts Available
                           </h4>
                       @endforelse
                    </div>
                    {{ $news->links('vendor.pagination.default') }}
              

        </div>
    </div>
@endsection