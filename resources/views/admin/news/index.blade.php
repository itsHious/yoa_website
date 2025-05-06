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
         News
              <div class="float-right ">
             
                <a class="btn btn-sm btn-outline-primary btn-sm " data-toggle="collapse" href="#addstaff" role="button" aria-expanded="false" aria-controls="collapseform">Add News</a>
              </div>
            


          </div>
          <div class="card-body">
           
             <div id="addstaff" class="collapse col-lg mx-auto bg-whitesmoke p-3">
                <form class="" action="{{ route('news.create') }}" method="post" enctype="multipart/form-data">
                    @csrf
   
                    <div class="row">
                      <div class="col-lg mx-auto">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" required class="form-control" name="title">
                        </div>
                    </div>
                       

                       <div class="col-lg">
                        <div class="form-group">
                            <label for="">Cover Image</label>
                              <input type="file" required class="form-control" name="cover_img" accept=".jpg,.jpeg,.png,.webp">
                          </div>
                        </div>

                        <div class="col-lg">
                          <div class="form-group">
                            <label for="">Content Type</label>
                            <select name="content_type" required class="form-control">
                              <option value="News">News</option>
                              <option value="Publications">Publications</option>
                            </select>
                          </div>
                        </div>
                    </div>

                        
                      <div class="mt-2">
                        <div class="form-group">
                            <label class="">Content</label>
                              <div class="col-lg-12">
                                <textarea class="summernote form-control" name="content"></textarea>
                              </div>
                          </div>
                      </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-success btn-sm col-lg-5" name="button">Publish News</button>
                    </div>
                  </form>
             </div>

            
                      <div class="col-md-12 table-responsive">

                          {!! $dataTable->table(['class' => 'ggg table table-striped table-bordered table-hover text-center']) !!}
                      </div>

          </div>
        </div>
      </div>
    {{-- </section> --}}

  </div>
@endsection

@section('page-js')
<script src="{{ asset('admin/assets/bundles/summernote/summernote-bs4.js')}}"></script>

<script src="{{ asset('admin/assets/scripts.js') }}"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
   <script src="{{ asset('admin/assets/prev.js') }}"></script>
   <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    {!! $dataTable->scripts() !!}
  

@endsection
