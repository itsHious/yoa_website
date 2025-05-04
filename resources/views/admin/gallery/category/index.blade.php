@extends('layouts.app')
@section('page-css')

  <link rel="stylesheet" href="{{ asset('admin/assets/js/vendor/datatable/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/js/vendor/datatable/jj.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/js/vendor/datatable/responsivebootstrap4.min.css') }}">

@endsection
@section('content')

      <div class="section-body">
        <div class="card">
          <div class="card-header"  style="display:inline">
          Gallery Categories
              <div class="float-right ">
             
                <a class="btn btn-sm btn-outline-primary btn-sm " data-toggle="collapse" href="#addstaff" role="button" aria-expanded="false" aria-controls="collapseform">Add New Category</a>
              </div>
            


          </div>
          <div class="card-body">
           
             <div id="addstaff" class="collapse col-lg mx-auto bg-whitesmoke p-3">
                <form class="" action="{{ route('gallery.category.create') }}" method="post" enctype="multipart/form-data">
                    @csrf
   
                    <div class="row">
                      <div class="col-lg-5 mx-auto">
                        <div class="form-group">
                          <label for="">Name</label>
                          <input type="text" required class="form-control" name="name">
                        </div>
                       

                        <div class="form-group">
                          <label for="">Image</label>
                            <input type="file" required class="form-control" name="cover_img" accept=".jpg,.jpeg,.png,.webp">
                        </div>
                      </div>

                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-success btn-sm col-lg-5" name="button">Add Category</button>
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

<script src="{{ asset('admin/assets/scripts.js') }}"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
   <script src="{{ asset('admin/assets/prev.js') }}"></script>
   <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    {!! $dataTable->scripts() !!}
  

@endsection
