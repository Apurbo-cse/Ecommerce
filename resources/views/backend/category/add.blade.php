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
                                Add Category
                            </div>


                            <div class="card-body">
                                <form action="adding_category" method="POST" enctype="multipart/form-data">
                                    @csrf


                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="row">
                                                <div>
                                                    <h5>Select Parent Category: </h5>
                                                </div>
                                            </div>

                                            <div class="row" style="max-height: 75%; overflow: scroll">


                                                <ul style="list-style: none">
                                                    @php $data = App\Models\Category::where('group_id','=','0')->get(); @endphp
                                                    <li>
                                                        <input type="radio" name="group_id" value="0" required>
                                                        <label class="form-check-label text-danger" for="exampleCheck1">New Root Category</label>
                                                    </li>
                                                    <hr>

                                                    @foreach($data as $item)
                                                    <li>
                                                        <input type="radio" name="group_id" value="{{ $item->id }}">
                                                        <label class="form-check-label" for="exampleCheck1">{{ $item->name }}</label>
                                                        <ul style="list-style: none">
                                                            @php $data = App\Models\Category::where('group_id','=',$item->id)->get(); @endphp
                                                            @foreach($data as $item)
                                                            <li>
                                                                <i class="far fa-hand-point-right"></i>
                                                                <label class="form-check-label" for="exampleCheck1">{{ $item->name }}</label>
                                                                
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                    @endforeach
                                                </ul>



                                            </div>
                                        </div>
                                        <div class="col-md-8">

                                            <h3>Category Information:</h3>
                                            <hr>
                                            <div class="row">

                                                <div class="form-group col-md-6">
                                                    <label for="exampleInputEmail1">Name</label>
                                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"  placeholder="Name">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Description</label>
                                                <textarea name="description" class="form-control" id="" rows="4" placeholder="Description"></textarea>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-check-label" for="exampleCheck1">Image</label>
                                                    <input type="file" class="form-control" name="file">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-check-label" for="exampleCheck1">Banner</label>
                                                    <input type="file" class="form-control" name="file1">
                                                </div>
                                            </div>

                                            
                                            <hr>
                                            
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="status">
                                                <label class="form-check-label" for="exampleCheck1">Show On Homepage</label>
                                            </div>
                                            
                                            <!--
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="cod">
                                                <label class="form-check-label" for="exampleCheck1">Cash On Delivery- On</label>
                                            </div>
                                            -->
                                            <hr>
                                            

                                            <input type="hidden" name="vendor_id" value="{{ Auth::user()->id }}">

                                            <div class="pt-3">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>

                                    </div>


                                    </form>
                            </div>
                        </div>

                        </div>
@endsection
