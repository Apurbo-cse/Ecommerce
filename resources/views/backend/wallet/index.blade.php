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
                                User Wallet Table
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Wallet Balance</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($user as $data)
                                                <tr>
                                                    <td>{{ $data->id }}</td>
                                                    <td>{{ $data->name }}</td>
                                                    <td>{{ $data->email }}</td>
                                                    <form action="{{ url('update-wallet/'.$data->id) }}" method="POST">
                                                        @csrf
                                                    <td>
                                                        <input type="number" name="wallet" class="form-control" value="{{ number_format($data->wallet) }}" style="width: 150px">
                                                    </td>
                                                    <td>
                                                        <button type="submit" class="btn badge-pill btn-primary px-3 py-0">Update</button>
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
