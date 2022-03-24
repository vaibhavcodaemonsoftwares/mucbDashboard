@extends('layouts.master')
@section('title','Add Packages')
@section('content')
            <div class="row px-5 py-3">
                <div class="col-md-12">
                    @if (session('result'))
                        <h6 class="alert alert-success">{{session('result')}}</h6>
                    @endif
                    <div class="card" style="margin-bottom: 20px;">
                        <div class="card-header d-flex justify-content-between">
                            <div>
                                <h2>All Packages</h2>
                            </div>
                            <div>
                                <a href="{{ url('admin/add-product') }}" class="btn btn-primary float-end">Add New Package</a>
                            </div>

                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Package Title</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Discription</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($packages as $package)
                                    <tr>
                                        <td>{{ $package->package_id }}</td>
                                        <td>{{ $package->package_name }}</td>
                                        <td>{{ $package->package_price }}</td>
                                        <td>
                                            <img src="{{asset('img/'.$package->package_img)}} " width="50px" height="50px">
                                        </td>
                                        <td>{{ $package->package_desc }}</td>
                                        <td>
                                            <a href="{{'package-edit/'.$package->package_id}}" class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <a href="{{url('package-delete/'.$package->package_id)}}" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
@endsection
