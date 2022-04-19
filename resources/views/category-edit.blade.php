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
                                <h2>Edit Category</h2>
                            </div>
                            <div>
                                <a href="{{ url('admin/category-list') }}" class="btn btn-danger float-end">BACK</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('admin/update-category/'.$category[0]->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group mb-3">
                                    <label class="form-label">Category:</label>
                                    <input type="text" class="form-control" name="category_name" value="{{$category[0]->Name}}" >
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary">Update Category</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
