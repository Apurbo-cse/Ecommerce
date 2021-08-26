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
                                Edit Product
                            </div>

                            <div class="card-body">
                                <form action="{{ url('update_category/'. $category->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Parent Category Id: {{ $category->group_id }}</label>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input type="text" name="name" class="form-control" id="exampleInputEmail1"  value="{{ $category->name }}">
                                        </div>


                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Description</label>
                                        <textarea name="description" class="form-control" id="" rows="4" placeholder="">{{ $category->description }}</textarea>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-check-label" for="exampleCheck1">Image</label>
                                            <img src="{{ asset('uploads/category/'.$category->photo) }}" alt="" height="200" width="200">
                                            <input type="file" class="form-control" name="file">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-check-label" for="exampleCheck1">Image</label>
                                            <img src="{{ asset('uploads/category/banner/'.$category->photo1) }}" alt="" height="200" width="600">
                                            <input type="file" class="form-control" name="file1">
                                        </div>
                                    </div>
                                
                                
                                <hr>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="status" {{ $category->status == '1' ? 'checked' : ' ' }}>
                                        <label class="form-check-label" for="exampleCheck1">Show On Homepage</label>
                                    </div>
                                    <!--
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="cod" {{ $category->cod == '1' ? 'checked' : ' ' }}>
                                        <label class="form-check-label" for="exampleCheck1">Cash On Delivery - Disable</label>
                                    </div>
                                    -->
                                <hr>
                                


                                    <div class="pt-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                    </form>
                            </div>
                        </div>

                        </div>
@endsection
