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
                                Add Product
                            </div>




                            <div class="card-body">
                                <form action="adding_item" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">

                                        <div class="col-md-4">

                                            <div class="row">
                                                <div>
                                                    <h5>Select Category: </h5>
                                                </div>
                                            </div>

                                            <div class="row">


                                                <ul style="list-style: none">
                                                    @php $data = App\Models\Category::where('group_id','=','0')->get(); @endphp
                                                    @foreach($data as $item)
                                                    <li>
                                                        <input type="radio" name="group_id" value="{{ $item->id }}" required>
                                                        <label class="form-check-label" for="exampleCheck1">{{ $item->name }}</label>
                                                        <ul style="list-style: none">
                                                            @php $data = App\Models\Category::where('group_id','=',$item->id)->get(); @endphp
                                                            @foreach($data as $item)
                                                            <li>
                                                                <input type="checkbox" name="category_id" value="{{ $item->id }}">

                                                                <label class="form-check-label" for="exampleCheck1">{{ $item->name }}</label>
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                    @endforeach
                                                </ul>



                                            </div>

                                            <hr>


                                        </div>


                                        <div class="col-md-8">

                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-check-label" for="exampleCheck1">Name</label>
                                                    <input type="text" class="form-control" name="name" required>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label class="form-check-label" for="exampleCheck1">Brand</label>
                                                    <select class="form-control" name="brand">
                                                        <option value="">Others</option>
                                                        @foreach($brand as $data)
                                                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>

                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Description</label>
                                                <textarea name="description" class="form-control" id="summernote" rows="4" placeholder="Description" required></textarea>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-check-label" for="exampleCheck1">Price</label>
                                                    <input type="number" class="form-control" name="price">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-check-label" for="exampleCheck1">offer Price</label>
                                                    <input type="number" class="form-control" name="offer_price" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-check-label" for="exampleCheck1">Image</label>
                                                    <input type="file" class="form-control" name="file" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-check-label" for="exampleCheck1">Extra Image 1</label>
                                                    <input type="file" class="form-control" name="file1">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-check-label" for="exampleCheck1">Extra Image 2</label>
                                                    <input type="file" class="form-control" name="file2">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-check-label" for="exampleCheck1">Quantity</label>
                                                    <input type="number" class="form-control" name="quantity">
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
                                            <div class="form-check">
                                                <div class="form-group">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="status">
                                                    <label class="form-check-label" for="exampleCheck1">Show/Hide</label>
                                                </div>
                                                
                                                <!--
                                                <div class="form-group">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="latest">
                                                    <label class="form-check-label" for="exampleCheck1">Latest</label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="featured">
                                                    <label class="form-check-label" for="exampleCheck1">Featured</label>
                                                </div>
                                                --->
                                            </div>

                                            <input type="hidden" name="vendor_id" value="{{ Auth::user()->id }}">

                                            <div class="pt-3">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                            </form>


                                        </div>

                                    </div>


                                    </div>


                            </div>



@endsection

@section('script')

<script>
    $('#summernote').summernote({
      placeholder: 'Description',
      tabsize: 2,
      height: 200
    });
  </script>


@endsection
