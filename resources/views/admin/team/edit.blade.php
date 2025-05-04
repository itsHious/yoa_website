@extends('layouts.app')

@section('content')

      <div class="section-body">
        <div class="card">
          <div class="card-header"  style="display:inline">
          Edit Team Member
             
            


          </div>
          <div class="card-body">
           
            <form class="" action="{{ route('team.update',$team->id) }}" method="post" enctype="multipart/form-data">
              @csrf

              <div class="row">
                <div class="col-lg">
                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" required class="form-control" value="{{ $team->name }}" name="name">
                  </div>
                  <div class="form-group">
                    <label for="">Position</label>
                    <input type="text" required class="form-control" value="{{ $team->position }}" name="position">
                  </div>

                  <div class="form-group">
                    <label for="">Image</label>
                      <input type="file"  class="form-control" name="image" accept=".jpg,.jpeg,.png,.webp">
                      <small>{{ $team->image }}</small>
                  </div>
                </div>
                <div class="col-lg">
                  <div class="form-group">
                    <label for="">Facebook Link</label>
                    <input type="url"  class="form-control" value="{{ $team->fb_link }}" name="fb_link">
                  </div>

                  <div class="form-group">
                    <label for="">Twitter/X Link</label>
                    <input type="url"  class="form-control" value="{{ $team->x_link }}" name="x_link">
                  </div>
                  <div class="form-group">
                    <label for="">LinkedIn Link</label>
                    <input type="url"  class="form-control" value="{{ $team->lk_link }}" name="lk_link">
                  </div>
                </div>
                

               


              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-success btn-sm col-lg-5" name="button">Update Member</button>
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
