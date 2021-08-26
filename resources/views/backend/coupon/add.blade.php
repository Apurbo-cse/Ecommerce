@extends('backend.master')

@section('content')

 @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
     </div>
 @endif

<div class="card mb-4">
    <div class="container-fluid">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Add Coupon
                            </div>

                            <div class="card-body">
                                <form action="adding_coupon" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Description</label>
                                            <textarea name="name" class="form-control" id="" rows="2" placeholder="Description"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Offer in Percentage</label>
                                        <input type="number" name="offer" class="form-control" id="exampleInputEmail1" max="100"  placeholder="input value in %">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Code</label>
                                        <input type="text" name="code" class="form-control" id="exampleInputEmail1"  placeholder="Code">
                                    </div>




                                    <div class="pt-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                    </form>
                            </div>
                        </div>

                        </div>
@endsection
