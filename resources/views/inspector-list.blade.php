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
                                <h2>All Inspectors</h2>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped customer-table">
                                <thead>
                                    <tr>
                                        <th>Sr.No.</th>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inspectors as $inspector)
                                    <tr>
                                        <td class="counterCell"></td>
                                        <td>{{ $inspector->id }}</td>
                                        <td>{{ $inspector->name }}</td>
                                        <td>{{ $inspector->email }}</td>
                                        <td>{{ $inspector->user_status }}</td>
                                        <td>
                                            <a href="{{'customers-edit/'.$inspector->id}}" class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <a href="{{('customers-delete/'.$inspector->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
@endsection
