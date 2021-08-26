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
                                Order Table

                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Item Id</th>
                                                <th>Item Name</th>
                                                <th>Image</th>
                                                <th>Quantity</th>
                                                <th>Color</th>
                                                <th>Size</th>
                                                <th>Price</th>
                                                <th>Order time</th>
                                                <th>Status</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($order as $item)
                                                <tr>
                                                    <td>{{ $item->item_id }}</td>
                                                    <td>{{ $item->item->name }}</td>
                                                    <td>
                                                        <img src="{{ asset('uploads/item/'.$item->item->photo) }}" alt="" height="50" width="40">
                                                    </td>
                                                    <td>{{ $item->quantity }}</td>
                                                    <td>{{ $item->color }}</td>
                                                    <td>{{ $item->size }}</td>
                                                    <td>{{ $item->price }}</td>
                                                    <td>{{ $item->created_at }}</td>
                                                    <td>{{ $item->order->action }}</td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        </div>
@endsection
