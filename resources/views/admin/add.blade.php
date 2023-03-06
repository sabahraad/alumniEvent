@extends('layouts.app')

@section('content')
 <div clas="container"style="margin-right: 132px;
    margin-left: 132px;
    margin-top: 35px;">
<div class="card">
  <div class="card-header">Add Customer</div>
  <div class="card-body">
      
      <form action="{{ route('store') }}" method="post">
        {!! csrf_field() !!}
        <label>Jid</label></br>
        <input type="text" name="Jid" id="name" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="name" id="address" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="mobile" class="form-control"></br>
        <label>Passing Year</label></br>
        <input type="text" name="passing_year" id="mobile" class="form-control"></br>
        <label>Mobile Number</label></br>
        <input type="text" name="mobile_number" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
</div>

 
@endsection