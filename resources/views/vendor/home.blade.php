@extends('vendor.master')

@section('content')

<main>
                    <div class="container-fluid">
                        <h3 class="mt-4">Vendor Dashboard</h3>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Order Management</li>
                        </ol>
                        <div class="row">

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">

                                    @php

                                    $id = Auth::user()->id;
                                    $order = App\Models\Orderitem::where('vendor_id','=',$id)->count();
                                    @endphp

                                    <div class="card-body">Order (Total: {{ $order }})
                                    </div>

                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="/vendor_order">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Product Management</li>
                        </ol>

                        <div class="row">


                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">

                                    @php
                                        $id=Auth::user()->id;
                                        $item = App\Models\item::where('vendor_id','=',$id)->count();
                                    @endphp

                                    <div class="card-body">Product Item (Total: {{ $item }})
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="/vendor_item">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                </main>


    @endsection
