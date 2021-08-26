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
                                Order Table

                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Order Id</th>
                                                <th>Buyer Id</th>
                                                <th>City</th>
                                                <th>Price</th>
                                                <th>Delevery Charge</th>
                                                <th>Wallet</th>
                                                <th>Coupon</th>
                                                <th>Total</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($order as $item)
                                                <tr>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->user_id }}</td>
                                                    <td>{{ $item->city }}</td>
                                                    <td>{{ number_format($item->price) }}</td>
                                                    <td>{{ $item->del_charge }}</td>
                                                    <td>{{ $item->wallet_move }}</td>
                                                    <td>{{ $item->coupon_move }}</td>
                                                    <td>{{ number_format($item->amount) }}</td>
                                                    <td>
                                                        @if($item->action == 'New')
                                                            <span class="badge badge-pill badge-danger">New</span>
                                                        @elseif($item->action == 'Processing')
                                                            <span class="badge badge-pill badge-warning">Processing</span>
                                                        @elseif($item->action == 'Shipped')
                                                            <span class="badge badge-pill badge-primary">Shipped</span>
                                                        @elseif($item->action == 'Completed')
                                                            <span class="badge badge-pill badge-success">Completed</span>
                                                        @elseif($item->action == 'Return')
                                                            <span class="badge badge-pill badge-info">Returned</span>
                                                        @endif
                                                    </td>

                                                    <td>
                                                        <a href="edit_order/{{ $item->id }}" class="badge badge-info">View</a>
                                                        <a href="delete_order/{{ $item->id }}" class="badge badge-dark">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        </div>
@endsection
