@extends('backend.master')

@section('content')

<main>
                    <div class="container-fluid">
                        <h4 class="mt-4">Admin Dashboard</h4>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">User Managing</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">

                                    @php $user = App\Models\User::where('roll_as','=',NULL)->count(); @endphp

                                    <div class="card-body">Registered User: <h5>Total: {{ $user }}</h5>
                                    </div>

                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="/registered-user">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">

                                    @php $vendor = App\Models\User::where('roll_as','=','vendor')->count(); @endphp

                                    <div class="card-body">Vendor <h5>Total: {{ $vendor }}</h5>
                                    </div>

                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="/vendor-user">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">

                                    @php $apply = App\Models\User::where('roll_as','=','apply')->count(); @endphp

                                    <div class="card-body">Vendor Applicant <h5>Total: {{ $apply }}</h5>
                                    </div>

                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="/vendor-apply">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Order Managing</li>
                        </ol>
                        <div class="row">

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">

                                    @php $order = App\Models\Order::where('action','=','New')->count(); @endphp

                                    <div class="card-body">New Order: (Total: {{ $order }})
                                    </div>

                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="/admin_order_new">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">

                                    @php $order = App\Models\Order::where('action','=','Processing')->count(); @endphp

                                    <div class="card-body">Processing Order (Total: {{ $order }})
                                    </div>

                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="/admin_order_processing">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">

                                    @php $order = App\Models\Order::where('action','=','Shipped')->count(); @endphp

                                    <div class="card-body">Shipped Order (Total: {{ $order }})
                                    </div>

                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="/admin_order_shipped">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">

                                    @php $order = App\Models\Order::where('action','=','Return')->count(); @endphp

                                    <div class="card-body">Return Order (Total: {{ $order }})
                                    </div>

                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="/admin_order_return">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Product Managing</li>
                        </ol>
                        <div class="row">


                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">

                                    @php $item = App\Models\item::all()->count(); @endphp

                                    <div class="card-body">Product Item (Total: {{ $item }})
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{ url('/item') }}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">

                                    @php $item = App\Models\item::where('status','0')->count(); @endphp

                                    <div class="card-body">Product review due (Total: {{ $item }})
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{ url('/due_item') }}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </main>


    @endsection
