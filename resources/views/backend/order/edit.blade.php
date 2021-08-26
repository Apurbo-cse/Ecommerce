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


                                    <form action="{{ url('order_action/'.$item->id) }}" method="POST">
                                        @csrf
                                        <strong>Select Action: </strong>
                                        <select name="action" class="form-control my-1" style="width: 400px!important ;">
                                            <option value="{{ $item->action }}">{{ $item->action }}</option>
                                            <option value="Processing">Processing</option>
                                            <option value="Shipped">Shipped</option>
                                            <option value="Completed">Completed</option>
                                            <option value="Cancel">Cancel</option>
                                            <option value="Return">Return</option>
                                        </select>

                                        <button type="submit" class="btn btn-info">Submit</button>
                                    </form>

                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col ml-5"><strong>Order Id</strong></div>
                                    <div class="col"><strong>Name</strong></div>
                                    <div class="col"><strong>Address</strong></div>
                                    <div class="col"><strong>Phone</strong></div>
                                    <div class="col"><strong>Total</strong></div>
                                    <div class="col"><strong>Time</strong></div>
                                    <div class="col"><strong>Action</strong></div>
                                    <div class="col"><strong>Invoice</strong></div>
                                </div>



                                    <div class="row">

                                        <div class="col ml-5">

                                            <p>{{ $item->id }}</p>
                                        </div>

                                        <div class="col">

                                            <p>{{ $item->name }}</p>
                                        </div>

                                        <div class="col">

                                            <p>{{ $item->address }}</p>
                                        </div>

                                        <div class="col">

                                            <p>{{ $item->phone }}</p>
                                        </div>

                                        <div class="col">

                                            <p>{{ number_format($item->amount) }}</p>

                                        </div>
                                        
                                        <div class="col">

                                            <p>{{ $item->time }}</p>

                                        </div>



                                        <div class="col">

                                            <p>{{ $item->action }}</p>
                                        </div>

                                        <div class="col">
                                        <a href="{{ url('admin_invoice/'.$item->id) }}" class="btn btn-success">Generate PDF</a>
                                    </div>

                                    </div>

                            </div>

                            <div class=" text-center">
                                <div class="row">

                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Product Id</th>
                                                        <th>Name</th>
                                                        <th>Image</th>
                                                        <th>Quantity</th>
                                                        <th>Color</th>
                                                        <th>Size</th>
                                                        <th>Price</th>
                                                        <th>Total Price</th>
                                                        <th>Vendor Id</th>
                                                        <th>Vendor Name</th>
                                                        <th>Collect</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach ($order_item as $data)
                                                        <tr>
                                                            <td>{{ $data->item_id }}</td>
                                                            <td>{{ $data->item->name }}</td>
                                                            <td>
                                                                <img src="{{ asset('uploads/item/'.$data->item->photo) }}" alt="" height="50" width="40">
                                                            </td>
                                                            <td>{{ $data->quantity }}</td>
                                                            <td>{{ $data->color }}</td>
                                                            <td>{{ $data->size }}</td>
                                                            <td>{{ number_format($data->price) }}</td>
                                                            <td>{{ number_format($data->price * $data->quantity) }}</td>
                                                            <td>{{ $data->vendor_id }}</td>
                                                            <td>{{ $data->vendor->name}}</td>
                                                            <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" {{ $data->collect == '1' ? 'checked' : ' ' }} readonly>
                                                            </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>


                                        </div>
                                    </div>

                                </div>


                            </div>


                        </div>


                        </div>
@endsection
