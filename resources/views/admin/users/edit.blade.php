@extends('layouts.app')

@section('content')

      <div class="section-body">
        <div class="card">
          <div class="card-header"  style="display:inline">
          Edit Users
             
            


          </div>
          <div class="card-body">
           
                <form class="" action="{{ route('users.update',$user->id) }}" method="post">
                    @csrf
   
                    <div class="row">
                      <div class="col-lg">
                        <div class="form-group">
                          <label for="">Name</label>
                          <input type="text" required value="{{ $user->name }}" class="form-control" name="name">
                        </div>
                       
                      </div>
                      <div class="col-lg">
                        <div class="form-group">
                          <label for="">Email</label>
                          <input type="text" required class="form-control" value="{{ $user->email }}" name="email">
                        </div>
                      </div>
                        <div class="col-lg">
                          <div class="form-group">
                            <label for="">Role</label>
                            <select required class="form-control" name="role">
                                <option {{ $user->role == 1?'selected':'' }} value="1">Super Admin(All Access)</option>
                                <option {{ $user->role == 2?'selected':'' }} value="2">Admin(Website Management Access)</option>
                              
                            </select>
                          </div>
                        </div>
                      </div>
   
                     
   
   
                    <div class="text-center">
                      <button type="submit" class="btn btn-success btn-sm col-lg-5" name="button">Update User</button>
                    </div>
                  </form>
             </div>

          

          </div>
        </div>
      </div>
    {{-- </section> --}}

  </div>
@endsection

@section('page-js')

<script src="{{ asset('admin/assets/scripts.js') }}"></script>

@endsection
