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
        <form action="{{ url('commission-update/'.$user->id) }}" method="POST">
            @csrf







   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" value="{{ $user->email }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" value="{{ $user->name }}" readonly>
    </div>
  </div>


  <hr>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Commission</label>
    <div class="col-sm-10">
      <input type="number" class="" name="commission" value="{{ $user->commission }}" max="100" min="0" width="200px!important"> %
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Paid</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="paid" value="{{ $user->paid }}">
    </div>
  </div>



  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>

    </div>

@endsection
