@extends('layouts.app')

@section('content')
<div clas="container"style="margin-right: 132px;
    margin-left: 132px;
    margin-top: 35px;">
<div class="card">
  <div class="card-header">Edit Customer</div>
  <div class="card-body">
      
      <form action="{{route('update',[$data->Jid])}}" method="post">
        {!! csrf_field() !!}
        <label>Jid</label></br>
        <input type="text" name="jid" id="id" value="{{$data->Jid}}" class="form-control" id="id" disabled></br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$data->name}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="email" name="email" id="address" value="{{$data->email}}" class="form-control"></br>
        <label>Passing Year</label></br>
        <input type="text" name="passing_year" id="mobile" value="{{$data->passing_year}}" class="form-control"></br>
        <label>Mobile Number</label></br>
        <input type="text" name="mobile_number" id="mobile" value="{{$data->mobile_number}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
</div>
@endsection