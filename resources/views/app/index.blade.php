@extends('layout.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="txt">
                <h1>Add App</h1>
            </div>
        </div>
        <div class="col-md-6">
            <div class="button">
                <a href="{{route('app.add')}}" class="btn btn-primary">Add App</a>
            </div>
        </div>
    </div>
    <table class="table table-sucess table-striped">
        <tr>
            <th>Name</th>
            <th>Action</th>
        </tr>
        @foreach ($apps as $app)
            <tr>
                <td>{{$app->app_name}}</td>
                <td>
                    <a href="{{route('app.delete',[$app->id])}}" class="btn btn-danger">Delete</a>
                    <a href="{{route('app.edit',['app'=>$app->id])}}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
