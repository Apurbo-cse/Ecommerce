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
                                                <th>Id</th>
                                                <th>Order Id</th>
                                                <th>Product Id</th>
                                                <th>Product Name</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Vendor Id</th>
                                                <th>Vendor Name</th>
                                                <th>Status</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($item as $item)
                                                <tr>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->order_id }}</td>
                                                    <td>{{ $item->item_id }}</td>
                                                    <td>{{ $item->item->name }}</td>
                                                    <td>{{ $item->price }}</td>
                                                    <td>{{ $item->quantity }}</td>
                                                    <td>{{ $item->vendor_id }}</td>
                                                    <td>{{ $item->vendor->name }}</td>
                                                    <td>
                                                        <form action="{{ url('col_status/'.$item->id) }}" method="POST">
                                                            @csrf
                                                            <select name="collect" class="form-control my-1" style="width: 180px!important ;">
                                                                <option value="{{ $item->collect }}">
                                                                    @if($item->collect == '0')
                                                                        --Not Collected--
                                                                    @else
                                                                        --Collected--
                                                                    @endif
                                                                </option>
                                                                <option value="1">Collected</option>

                                                            </select>

                                                            <button type="submit" class="btn btn-info">Update</button>
                                                        </form>
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
