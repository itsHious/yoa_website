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
          <div class="card-header"  style="display:inline">
         Edit {{ $news->title }}
             
            


          </div>
          <div class="card-body">
           
                <form class="" action="{{ route('news.update',$news->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
   
                    <div class="row">
                      <div class="col-lg mx-auto">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" required value="{{ $news->title }}"  class="form-control" name="title">
                        </div>
                    </div>
                       

                       <div class="col-lg">
                        <div class="form-group">
                            <label for="">Cover Image</label>
                              <input type="file"   class="form-control" name="cover_img" accept=".jpg,.jpeg,.png,.webp">
                              <small>{{ $news->cover_img }}</small>
                          </div>
                        </div>

                        <div class="col-lg">
                          <div class="form-group">
                            <label for="">Content Type</label>
                            <select name="content_type" required class="form-control">
                              <option {{ $news->content_type=='News'?'selected':"" }} value="News">News</option>
                              <option {{ $news->content_type=='Publications'?'selected':"" }} value="Publications">Publications</option>
                            </select>
                          </div>
                        </div>
                    </div>

                        
                      <div class="mt-2">
                        <div class="form-group">
                            <label class="">Content</label>
                              <div class="col-lg-12">
                                <textarea class="summernote form-control" name="content">{!! $news->content !!}</textarea>
                              </div>
                          </div>
                      </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-success btn-sm col-lg-5" name="button">Update News</button>
                    </div>
                  </form>

            
                    

          </div>
        </div>
      </div>
    {{-- </section> --}}

  </div>
@endsection

@section('page-js')

<script src="{{ asset('admin/assets/scripts.js') }}"></script>

  
<script src="{{ asset('admin/assets/bundles/summernote/summernote-bs4.js')}}"></script>

@endsection
