@extends('vendor.master')

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
                                Edit Product
                            </div>

                            <div class="card-body">
                                <form action="{{ url('vendor_update_item/'. $product->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">


                                        <h4>Category Name: {{ $product->group->name }}</h4>



                                    </div>

                                    <hr>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input type="text" name="name" class="form-control" id="exampleInputEmail1"  value="{{ $product->name }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Description</label>
                                        <textarea name="description" class="form-control" id="summernote" rows="4" placeholder="">{!! $product->description !!}</textarea>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-check-label" for="exampleCheck1">Price</label>
                                            <input type="number" name="price" class="form-control" id="exampleInputEmail1"  value="{{ $product->price }}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-check-label" for="exampleCheck1">Offer Price</label>
                                            <input type="number" name="offer_price" class="form-control" id="exampleInputEmail1"  value="{{ $product->offer_price }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <img src="{{ asset('uploads/item/'.$product->photo) }}" alt="" height="200" width="200">
                                            <label class="form-check-label" for="exampleCheck1">Image</label>
                                            <input type="file" class="form-control" name="file" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <img src="{{ asset('uploads/item/extra1/'.$product->photo1) }}" alt="" height="200" width="200">
                                            <label class="form-check-label" for="exampleCheck1">Extra Image 1</label>
                                            <input type="file" class="form-control" name="file1">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <img src="{{ asset('uploads/item/extra2/'.$product->photo2) }}" alt="" height="200" width="200">
                                            <label class="form-check-label" for="exampleCheck1">Extra Image 2</label>
                                            <input type="file" class="form-control" name="file2">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-check-label" for="exampleCheck1">Quantity</label>
                                            <input type="number" class="form-control" name="quantity" value="{{ $product->quantity }}">
                                        </div>
                                    </div>
                                    <hr>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-check-label" for="exampleCheck1">Size</label>
                                                    <input type="text" class="form-control" name="size">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-check-label" for="exampleCheck1">Color</label>
                                                    <input type="text" class="form-control" name="color">
                                                </div>
                                            </div>
                                            <hr>

                                    <div class="pt-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                    </form>
                            </div>
                        </div>

                        </div>
@endsection


@section('script')

<script>
    $('#summernote').summernote({
      placeholder: 'Hello Bootstrap 4',
      tabsize: 2,
      height: 300
    });
  </script>


@endsection
