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
                                <h2>Add Package</h2>
                            </div>
                            <div>
                                <a href="{{ url('admin/package-list') }}" class="btn btn-primary float-end">All Packages</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('admin/add-product')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="form-label">Title:</label>
                                    <input type="text" class="form-control" name="package_name" >
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Price:</label>
                                    <input type="Number" class="form-control" name="package_price" >
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Upload Images:</label>
                                    <input class="form-control" type="file" name="package_img">
                                </div>
                                <div class="form-group mb-3">
                                    <label  class="form-label">Discription:</label>
                                    <textarea class="form-control" name="package_desc" rows="3"></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary">Add Package</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection
