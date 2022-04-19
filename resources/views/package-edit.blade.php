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
                                <h2>Edit Package</h2>
                            </div>
                            <div>
                                <a href="{{ url('admin/add-product') }}" class="btn btn-danger float-end">BACK</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('admin/update-product/'.$package[0]->package_id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group mb-3">
                                    <label class="form-label">Title:</label>
                                    <input type="text" class="form-control" name="package_name" value="{{$package[0]->package_name}}" >
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Price:</label>
                                    <input type="Number" class="form-control" name="package_price" value="{{ $package[0]->package_price }}" >
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Upload Images:</label>
                                    <input class="form-control" type="file" name="package_img"  >
                                    <img src="{{asset('img/'.$package[0]->package_img)}} " width="70px" height="70px">
                                </div>
                                <div class="form-group mb-3">
                                    <label  class="form-label">Discription:</label>
                                    <input type="text" class="form-control" name="package_desc"  value="{{ $package[0]->package_desc }}" >
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary">Update Package</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
