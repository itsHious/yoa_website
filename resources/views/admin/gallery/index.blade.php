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
        {{ $cat->name }}  Gallery 
              <div class="float-right ">
             
                <a class="btn btn-sm btn-outline-primary btn-sm " data-toggle="collapse" href="#addstaff" role="button" aria-expanded="false" aria-controls="collapseform">Add New</a>
              </div>
            


          </div>
          <div class="card-body">
           
             <div id="addstaff" class="collapse col-lg mx-auto bg-whitesmoke p-3">
                <form class="" action="{{ route('gallery.create',$cat->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
   
                    <div class="row">
                      <div class="col-lg-5 mx-auto">
                        <div class="form-group">
                          <label for="">Image/Video</label>
                            <input type="file" required class="form-control" name="img[]" multiple >
                        </div>
                      </div>

                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-success btn-sm col-lg-5" name="button">Add to Category</button>
                    </div>
                  </form>
             </div>

            
                    <div class="row text-center">
                      @forelse ($img as $item)
                          <div class="col-lg-4 ">
                            <button style="position: relative; top:50px; margin-left:8px;" onclick="window.location.href='{{ route('delete.image',$item->id) }}'" class="btn btn-icon btn-sm btn-danger"><i class="fas fa-trash" ></i></button>
                            <img src="{{ asset($item->img) }}" class="img-fluid img-thumbnail shadow" alt="">
                          </div>
                      @empty
                          <h4 class="text-center text-muted">No Data Available</h4>
                      @endforelse
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
  

@endsection
