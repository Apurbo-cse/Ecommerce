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
                                    <div class="col"><strong>Place</strong></div>
                                    <div class="col"><strong>Action</strong></div>
                                </div>



                                    <div class="row">

                                        <div class="col ml-5">

                                            <p>{{ $item->id }}</p>
                                        </div>

                                        <div class="col">

                                            <p>{{ $item->user->name }}</p>
                                        </div>

                                        <div class="col">

                                            <p>{{ $item->address }}</p>
                                        </div>

                                        <div class="col">

                                            <p>{{ $item->phone }}</p>
                                        </div>

                                        <div class="col">

                                            <p>{{ number_format($item->price) }}</p>

                                        </div>

                                        <div class="col">

                                            <p>{{ $item->place }}</p>
                                        </div>

                                        <div class="col">

                                            <p>{{ $item->action }}</p>
                                        </div>




                                    </div>

                            </div>

                            <div class=" text-center">
                                <div class="row">

                                    <div class="col bg-light mx-2">
                                        <h4 class="text-center mt-1">Order Details</h4>

                                        <div class="row" style="border-bottom: 1px solid black;">
                                            <div class="col">Product Id</div>
                                            <div class="col">Name</div>
                                            <div class="col">Quantity</div>
                                            <div class="col">Price</div>
                                        </div>

                                        @php $total = 0 @endphp

                                        @foreach ($order_item as $data)

                                            <div class="row my-2">
                                                <div class="col">
                                                    {{ $data->item->id }}
                                                </div>
                                                <div class="col">
                                                    {{ $data->item->name }}
                                                </div>
                                                <div class="col">
                                                    <span>{{ $data->quantity }}</span>
                                                </div>
                                                <div class="col">
                                                        <span>{{ number_format($data->quantity * $data->price, 0) }} BDT</span>
                                                </div>
                                            </div>


                                            @php $total = $total + ($data->quantity * $data->price) @endphp

                                        @endforeach

                                        <!--
                                        <h3>{{ $total }}</h3>
                                        -->

                                    </div>

                                    <div class="col bg-light mx-2">
                                        <h4 class="text-center mt-1">Order Item Details</h4>


                                    </div>

                                </div>


                            </div>


                        </div>


                        </div>
@endsection
