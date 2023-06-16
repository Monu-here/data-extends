@extends('layout.index')
@section('content')
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="{{route('app.edit',['app'=>$app->id])}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="app_name" id="app_name" class="form-control form-group" value="{{$app->app_name}}">
                    </div>
                    <button class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
<style>
    .container{
        max-width:800px;
      margin: 50px auto;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(27, 26, 26, 0.1);
      padding: 40px;
    }
</style>
@endsection
