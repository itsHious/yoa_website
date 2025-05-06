@extends('layouts.app')
@section('page-css')

  <link rel="stylesheet" href="{{ asset('admin/assets/js/vendor/datatable/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/js/vendor/datatable/jj.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/js/vendor/datatable/responsivebootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/bundles/summernote/summernote-bs4.css')}}">


@endsection
@section('content')

      <div class="section-body">
        <div class="card">
        
          <div class="card-body">
       
            <div class="text-center mb-2">
                <img src="{{ asset($news->cover_img) }}" class="img-fluid rounded" alt="">
            </div>
            <h4 class="text-center">{{ $news->title }}</h4>
            <hr>
            {!! $news->content !!}
          </div>
        </div>
      </div>
    {{-- </section> --}}

  </div>
@endsection

@section('page-js')


@endsection
