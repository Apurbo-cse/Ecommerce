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
                                Product Table

                                <a type="button" class="btn btn-success text-white" href="add-item">Add New item</a>

                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Offer Description</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Show/hide</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($data as $item)
                                                <tr>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->offer }}</td>
                                                    <td>{{ $item->description }}</td>
                                                    <td>
                                                        <img src="{{ asset('uploads/banner/'.$item->photo) }}" alt="" height="50" width="40">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" {{ $item->status == '1' ? 'checked' : ' ' }}>
                                                    </td>
                                                    <td>
                                                        <a href="edit_banner/{{ $item->id }}" class="badge badge-pill btn-primary px-3 py-2">Edit</a>
                                                        <a href="delete_banner/{{ $item->id }}" class="badge badge-pill btn-danger px-3 py-2">Delete</a>
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
