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
                                User Table

                                <div class="text-info">
                                    <span>Total Online User:</span>
                                @php $total ='0' @endphp
                                @foreach ($user as $data)
                                @php
                                    if($data->isUserOnline())
                                    {
                                        $total = $total + 1;
                                    }
                                @endphp
                                @endforeach
                                {{ $total }}
                            </div>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Commission Rate</th>
                                                <th>Total Sell</th>
                                                <th>Payable</th>
                                                <th>Paid</th>
                                                <th>Due</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($user as $data)
                                                <tr>
                                                    <td>{{ $data->id }}</td>
                                                    <td>{{ $data->name }}</td>
                                                    <td>{{ $data->commission }}</td>
                                                    <td>{{ $data->total_sell }}</td>
                                                    <td>Payable</td>
                                                    <td>
                                                        {{ $data->paid }}
                                                    </td>
                                                    <td>
                                                        due
                                                    </td>
                                                    <td>
                                                        <a href="commission-edit/{{ $data->id }}" class="badge badge-pill btn-primary px-3 py-2">Edit</a>

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
