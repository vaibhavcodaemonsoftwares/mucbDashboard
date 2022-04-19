@extends('layouts.master')
@section('title','Add Packages')
@section('content')
        <div class="container" style="margin-top: 50px;">
            <div class="row">
                <div class="col-md-12">
                    @if (session('result'))
                        <h6 class="alert alert-success">{{session('result')}}</h6>
                    @endif
                    <div class="card" style="margin-bottom: 20px;">
                        <div class="card-header d-flex justify-content-between">
                            <div>
                                <h2>Edit Customer</h2>
                            </div>
                            <div>
                                <a href="{{ url('admin/customers-list') }}" class="btn btn-danger float-end">BACK</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('admin/update-customers/'.$customer[0]->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group mb-3">
                                    <label class="form-label">Name:</label>
                                    <input type="text" class="form-control" name="name" value="{{$customer[0]->name}}" >
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Email:</label>
                                    <input type="email" class="form-control" name="email" value="{{ $customer[0]->email }}" >
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Inspector Status:</label>
                                    <select name="inspector_status" class="form-control" id="status">
                                        <option value="{{ $customer[0]->user_status }}">{{ $customer[0]->user_status }}</option>
                                        <option value="Free">Free</option>
                                        <option value="Assigned">Assigned</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary">Update Customer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
