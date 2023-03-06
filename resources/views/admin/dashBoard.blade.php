@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">
  <head>
  	<title>Event</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

	</head>
	<body>

	<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="{{ route('add') }}" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Add New Customer</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('adminDashBoard') }}" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="{{ route('alumniMember') }}" class="nav-link px-0"> <span class="d-none d-sm-inline">Alumni Member</span>  </a>
                            </li>
                            <li>
                                <a href="{{ route('registeredList') }}" class="nav-link px-0"> <span class="d-none d-sm-inline">Registerd For Event</span>  </a>
                            </li>
                        </ul>
                    </li>
                    </ul>
                <hr>
                
            </div>
        </div>
        <div class="col py-3">
		<div class="container mt-5 text-center">
        <h2 class="mb-4">
            Alumni List    
        </h2>
        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <div class="form-group mb-4">
            <button class="btn btn-primary">Upload Excel</button>
            <a style="margin-left: 78px;"class="btn btn-success" href="{{ route('export-users') }}">Download Excel</a>
            </div>
        </form>
    </div>
	<div class="form-group mb-4">
	<form action="{{ route('add') }}" method="post">
		@csrf
	<button class="btn btn-primary" >Add Customer</button>
	</form>
	</div>
	@if (Session::get('msg'))
                    <p class="alert alert-success" style="text-align: center;">
                      {{ Session::get('msg') }}
                    </p>
                @endif
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-striped">
						  <thead>
						    <tr>
						      <th>Jid</th>
						      <th>Name</th>
						      <th>Email</th>
						      <th>Passing Year</th>
						      <th>Mobile Number</th>
						      <th>Action</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
                            @foreach($customer as $row)
						      <th scope="row">{{$row->Jid}}</th>
						      <td>{{$row->name }}</td>
						      <td>{{$row->email}}</td>
						      <td>{{$row->passing_year}}</td>
						      <td>{{$row->mobile_number}}</td>
						      <td><a href="{{ route('edit', [$row->Jid]) }}" class="btn btn-success">Edit</a></td>
							  </tr>

						   @endforeach
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
        </div>
    </div>
</div>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>


@endsection