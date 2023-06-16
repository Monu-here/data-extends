@extends('layout.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="txt">
                <h1>Add Installation</h1>
            </div>
        </div>
        <div class="col-md-6">
            <div class="button">
                <a href="{{route('installation.add')}}" class="btn btn-primary">Add Installation</a>
            </div>
        </div>
    </div>
    <table class="table table-sucess table-striped">
        <th>Customer Name</th>
        <th>App Name</th>
        <th>URL</th>
        <th>INFO</th>
        <th>Anydesk Id</th>
        <th>Client Key</th>
        <th>Installation Date</th>
        <th>Valid Date</th>
        <th>Action</th>
        @foreach ($installations as $installation)
            <tr>
                <td>{{$installation->customer->customer_name}}</td>
                <td>{{$installation->app->app_name}}</td>
                <td>{{$installation->url}}</td>
                <td>{{$installation->info}}</td>
                <td>{{$installation->anydesk}}</td>
                <td>{{$installation->clent}}</td>
                <td>{{$installation->installation_date}}</td>
                <td>{{$installation->valid_date}}</td>
                <td>
                    <a href="{{route('installation.delete',[$installation->id])}}" class="btn btn-danger">Delete</a>
                    <a href="{{route('installation.edit',['installation'=>$installation->id])}}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
