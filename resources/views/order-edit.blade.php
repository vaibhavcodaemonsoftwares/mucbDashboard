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
                                <h2>Edit Order</h2>
                            </div>
                            <div>
                                <a href="{{ url('admin/order-list') }}" class="btn btn-danger float-end">BACK</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('admin/update-order/'.$order[0]->orders_id)}}" method="POST" >
                                @csrf
                                @method('PUT')
                                <div class="form-group mb-3">
                                    <label class="form-label">User:</label>
                                    <input type="text" class="form-control" name="user_name" value="{{$order[0]->name}}" readonly>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Package:</label>
                                    <input type="text" class="form-control" name="package_name" value="{{ $order[0]->package_name }}" readonly>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Inspector:</label>
                                    <select name="inspector" class="form-control" id="status">
                                        <option value="{{ $order[0]->assigned_inspector }}">{{ $order[0]->assigned_inspector }}</option>
                                        <option value="None">None</option>
                                        @foreach ($inspectors as $inspector)
                                            <option value="{{ $inspector->name }}">{{ $inspector->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Order Status:</label>
                                    {{-- <input type="text" class="form-control" name="package_status" value="{{ $order[0]->order_status }}" > --}}
                                    <select name="order_status" class="form-control" id="status">
                                        <option value="{{ $order[0]->order_status }}">{{ $order[0]->order_status }}</option>
                                        <option value="Complete">Complete</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary">Update Order</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
