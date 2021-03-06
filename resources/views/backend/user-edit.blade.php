@extends('backend.master')

@section('content')
    <div class="container-fluid">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>Edit User</div>
    </div>

    <div class="p-3">
        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    </div>

    <div class="card-body">
        <form action="{{ url('roll-update/'.$user->id) }}" method="POST">
            @csrf

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Current Role:</label>
        <div class="col-sm-10">
            <h5>
                @if($user->roll_as == NULL)
                    User
                @else
                    {{ $user->roll_as }}
                @endif
            </h5>
        </div>
    </div>

    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Current Access:</label>
    <div class="col-sm-10">
        @if($user->access == NULL)
            <label class="py-2 px-3 badge btn-success">Accepted</label>
        @else
            <label class="py-2 px-3 badge btn-danger">Banned</label>
        @endif
    </div>
    </div>



   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" value="{{ $user->email }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" value="{{ $user->name }}">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Role</label>
    <div class="col-sm-10">
      <select class="custom-select" name="role">
        <option value="{{ $user->roll_as }}">---{{ $user->roll_as }}---</option>
        <option value="admin">Admin</option>
        <option value="vendor">Vendor</option>
        <option value="">User</option>
       </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Access</label>
    <div class="col-sm-10">
      <select class="custom-select" name="access">
        <option selected disabled>---Access---</option>
        <option value="">Accept</option>
        <option value="1">Banned</option>
       </select>
    </div>
  </div>

  @if($user->roll_as == 'apply' || $user->roll_as == 'vendor')

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-10">
        {{ $user->phone }}
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
        {{ $user->address }}
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">City</label>
    <div class="col-sm-10">
        {{ $user->city }}
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Photo</label>
    <div class="col-sm-10">
        <img src="{{ asset('uploads/vendor/'.$user->photo) }}" height="200" width="200">
    </div>
  </div>
  
  <hr>
  
  <h4>Shop Info</h4>
  
  <hr>
  
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Shop Name:</label>
    <div class="col-sm-10">
        {{ $user->shop_name }}
    </div>
  </div>
  
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Shop Address:</label>
    <div class="col-sm-10">
        {{ $user->shop_address }}
    </div>
  </div>
  
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Shop Image</label>
    <div class="col-sm-10">
        <img src="{{ asset('uploads/shop/'.$user->photo1) }}" height="200" width="200">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Shop Banner</label>
    <div class="col-sm-10">
        <img src="{{ asset('uploads/shop/banner/'.$user->photo2) }}" height="200" width="500">
    </div>
  </div>

  @endif



  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>

    </div>

@endsection
