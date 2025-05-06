@extends('website.layouts.index')
@section('page-css')
    <style>
        .blog-details-banner-large-image {
  height: 703px;
  background-image: url('{{ asset($news->cover_img) }}');
  background-attachment: fixed;
  background-position: center, center;
  background-size: cover;
}
    </style>
@endsection

@section('content')
    
<div class="blog-details-banner-large-image">

</div>

<div class="blog-details-area-main-wrapper pt--80">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details-area-inner-content">
                    <div class="blog-details-top-wrapper">
                        <div class="single">
                            <i class="fa-regular fa-circle-user"></i>
                            <span>by Admin</span>
                        </div>
                        <div class="single">
                            <i class="fa-regular fa-clock"></i>
                            <span>{{ date('d m, Y',strtotime($news->updated_at)) }}</span>
                        </div>
                        {{-- <div class="single">
                            <i class="fa-regular fa-tags"></i>
                            <span>Business Solution</span>
                        </div> --}}
                    </div>
                    <h2 class="title">{{ $news->title }}</h2>
                   {!! $news->content !!}
                </div>
            </div>

            <div class="col-xl-4 col-md-12 col-sm-12 col-12 mt_lg--60 blog-list-style pl--30 pl_md--10 pl_sm--10">
                
                <div class="rts-single-wized Recent-post">
                    <div class="wized-header">
                        <h5 class="title">
                            Recent Posts
                        </h5>
                    </div>
                    <div class="wized-body">
                       @forelse ($related as $item)
                       <div class="recent-post-single">
                        <div class="thumbnail">
                            <a href="#"><img src="{{ asset($item->cover_img) }}" alt="Blog_post"></a>
                        </div>
                        <div class="content-area">
                            <div class="user">
                                <i class="fal fa-clock"></i>
                                <span>{{ date('d m, Y',strtotime($news->updated_at)) }}</span>
                            </div>
                            <a class="post-title" href="#">
                                <h6 class="title">{{ $item->title }}</h6>
                            </a>
                        </div>
                    </div>
                       @empty
                           <h5 class="text-center text-muted">No Posts Available</h5>
                       @endforelse
                        
                    </div>
                </div>
              
                <div class="rts-single-wized contact">
                    <div class="wized-header">
                        <a href="#"><img src="{{ asset('website/assets/images/logo/logo_e.png') }}" alt="Business_logo"></a>
                    </div>
                    <div class="wized-body">
                        <h5 class="title">Need Help? We Are Here
                            To Help You</h5>
                        <a class="rts-btn btn-primary btn-white" href="{{ route('contact') }}">Contact Us</a>
                    </div>
                </div>
                <!-- single wized End -->
            </div>
        </div>
    </div>
</div>
@endsection