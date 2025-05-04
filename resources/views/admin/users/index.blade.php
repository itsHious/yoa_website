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
           Users
              <div class="float-right ">
             
                <a class="btn btn-sm btn-outline-primary btn-sm " data-toggle="collapse" href="#addstaff" role="button" aria-expanded="false" aria-controls="collapseform">Add New User</a>
              </div>
            


          </div>
          <div class="card-body">
           
             <div id="addstaff" class="collapse col-lg mx-auto bg-whitesmoke p-3">
                <form class="" action="{{ route('users.create') }}" method="post">
                    @csrf
   
                    <div class="row">
                      <div class="col-lg">
                        <div class="form-group">
                          <label for="">Name</label>
                          <input type="text" required class="form-control" name="name">
                        </div>
                       
                      </div>
                      <div class="col-lg">
                        <div class="form-group">
                          <label for="">Email</label>
                          <input type="text" required class="form-control" name="email">
                        </div>
                      </div>
                        <div class="col-lg">
                          <div class="form-group">
                            <label for="">Role</label>
                            <select required class="form-control" name="role">
                                <option value="1">Super Admin(All Access)</option>
                                <option value="2">Admin(Website Management Access)</option>
                              
                            </select>
                          </div>
                        </div>
   
                     
   
   
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-success btn-sm col-lg-5" name="button">Create User</button>
                    </div>
                  </form>
             </div>

            
             <div class="row mt-5">
                      <div class="col-md-12 table-responsive">

                          {!! $dataTable->table(['class' => 'ggg table table-striped table-bordered table-hover text-center']) !!}
                      </div>
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
