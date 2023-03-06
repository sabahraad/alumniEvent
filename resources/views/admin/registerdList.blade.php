<!doctype html>
<html lang="en">
  <head>
  	<title>Event</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="//cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
	
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

	</head>
<style>
    a{
        padding: 8px!important;
    }
</style>
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
                        <a href="adminDashBoard" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="alumniMember" class="nav-link px-0"> <span class="d-none d-sm-inline">Alumni Member</span>  </a>
                            </li>
                            <li>
                                <a href="registeredList" class="nav-link px-0"> <span class="d-none d-sm-inline">Registerd For Event</span>  </a>
                            </li>
                        </ul>
                    </li>
                    </ul>
                <hr>
                
            </div>
        </div>
        
            <div class="container ">
            <h2 class="mb-4" style="padding-left: 153px;">Registered Member for the event</h2>

            <div class="row col-md-12" style="padding-left: 153px;">
                <div class="col-xs-12">
                <!-- <table summary="This table shows how to create responsive tables using Datatables' extended functionality" class="table table-bordered table-hover dt-responsive"> -->
                <table id="myTable" class="table table-striped dt-responsive w-100 table-bordered display nowrap table-hover mb-0"> 
                <thead>
                    <tr>
                        <th>Jid</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Passing Year</th>
                        <th>Mobile_Number</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <tr>
                        @foreach($data as $row)
                            <th scope="row">{{$row->Jid}}</th>
                            <td>{{$row->name }}</td>
                            <td>{{$row->email}}</td>
                            <td>{{$row->passing_year}}</td>
                            <td>{{$row->mobile_number}}</td>
                    </tr>

                        @endforeach
                    </tbody>
                
                </table>
                </div>
            </div>
            </div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"><script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.jqueryui.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.jqueryui.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.colVis.min.js"></script>
    
    <script>
    $('table').DataTable();
    </script>