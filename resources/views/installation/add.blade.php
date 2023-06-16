@extends('layout.index')
@section('content')
<form action="{{route('installation.add')}}" method="POST">
    @csrf
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="">Customer name</label>
                        <select name="customer_name" id="customer_name">
                            @foreach ($customers as $customer)
                                <option value="{{ $customer->id }}">{{ $customer->customer_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">APP name</label>
                        <select name="app_name" id="app_name">
                            @foreach ($apps as $app)
                                <option value="{{ $app->id }}">{{ $app->app_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">URL</label>
                        <input type="text" name="url" id="" class="form-group form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">INFO</label>
                        <input type="text" name="info" id="" class="form-group form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">AnyDesk Id   </label>
                        <input type="text" name="anydesk" id="" class="form-group form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Client Key   </label>
                        <input type="text" name="clent" id="" class="form-group form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Installation Date   </label>
                        <input type="date" name="installation_date" id="" class="form-group form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Valid Date  </label>
                        <input type="date" name="valid_date" id="" class="form-group form-control">
                    </div>
                    <button class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>
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
