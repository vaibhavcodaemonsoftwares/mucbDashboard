@extends('layouts.master')
@section('title','Add Packages')
@section('content')
            <div class="row px-5 py-3">
                <div class="col-md-12">
                    <div class="card" style="margin-bottom: 20px;">
                        <div class="card-header">
                            <div>
                                <h2>All Orders</h2>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>User</th>
                                        <th>Package</th>
                                        <th>Inspector</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->orders_id }}</td>
                                        <td>{{ $order->name }}</td>
                                        <td>{{ $order->package_name }}</td>
                                        <td>{{ $order->assigned_inspector }}</td>
                                        <td>{{ $order->order_status }}</td>
                                        <td>
                                            <a href="{{'order-edit/'.$order->orders_id}}" class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
@endsection
