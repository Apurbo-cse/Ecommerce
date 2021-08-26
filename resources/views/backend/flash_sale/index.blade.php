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
                                Set up Flash Sell Product
                            </div>

                            <form action="{{ url('date') }}" method="POST">
                                @csrf

                                <div class="row my-2">

                                    <div class="col">
                                        <p class="text-center">End Date of Flash sale Offer</p>
                                    </div>
                                    <div class="col">
                                        <input type="date" class="form-control" name="date">
                                    </div>
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>

                                </div>

                            </form>


                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Vendor Name</th>
                                                <th>category name</th>
                                                <th>Price</th>
                                                <th>Offer_price</th>
                                                <th>Quantity</th>
                                                <th>Image</th>
                                                <th>Show/hide</th>
                                                <th>Flash Sale</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($item as $item)
                                                <tr>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->vendor->name }}</td>
                                                    <td>{{ $item->category->name }}</td>
                                                    <td>{{ $item->price }}</td>
                                                    <td>{{ $item->offer_price }}</td>
                                                    <td>{{ $item->quantity }}</td>
                                                    <td>
                                                        <img src="{{ asset('uploads/item/'.$item->photo) }}" alt="" height="50" width="40">
                                                    </td>
                                                    <form action="{{ url('flash_sell/'.$item->id) }}" method="POST">
                                                        @csrf
                                                    <td>
                                                        <input type="checkbox" {{ $item->flash == '1' ? 'checked' : ' ' }} name="flash">
                                                    </td>
                                                    <td>
                                                        <button type="submit" class="badge badge-pill btn-primary px-3 py-2">update</button>
                                                    </td>
                                                    </form>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        </div>
@endsection
