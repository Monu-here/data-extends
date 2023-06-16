@extends('layout.index')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="txt">
                <h1>Add Customer</h1>
            </div>
        </div>
        <div class="col-md-6">
            <div class="button">
                <a href="{{route('customer.add')}}" class="btn btn-primary">Add Customer</a>
            </div>
        </div>
    </div>
    <table class="table table-sucess table-striped">
        <tr>
            <th>Name</th>
            <th>Organization</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        @foreach ($customers as $customer)
            <tr>
                <td>{{$customer->customer_name}}</td>
                <td>{{$customer->orz}}</td>
                <td>{{$customer->phone}}</td>
                <td>{{$customer->address}}</td>
                <td>{{$customer->email}}</td>
                <td>
                    <a href="{{route('customer.delete',[$customer->id])}}" class="btn btn-danger">Del</a>
                    <a href="{{route('customer.edit',['customer'=>$customer->id])}}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
