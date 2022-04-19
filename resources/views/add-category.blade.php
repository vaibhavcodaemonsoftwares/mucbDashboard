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
                                <h2>Add Category</h2>
                            </div>
                            <div>
                                <a href="{{ url('admin/category-list') }}" class="btn btn-primary float-end">All Categories</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('admin/add-category')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="form-label">New Category:</label>
                                    <input type="text" class="form-control" name="category_name" >
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary">Add Category</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection
