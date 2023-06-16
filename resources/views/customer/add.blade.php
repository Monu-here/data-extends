@extends('layout.index')
@section('content')
<form action="{{route('customer.add')}}" method="POST">
    @csrf
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="customer_name" id="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name">Organization</label>
                        <input type="text" name="orz" id="orz" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name">Phone Number</label>
                        <input type="text" name="phone" id="phone" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name">Address</label>
                        <input type="text" name="address" id="address" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <button class="btn btn-primary">Submit</button>
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
