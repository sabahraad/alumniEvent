@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Merchant Care Evaluation</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet" > 
    <link href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <style>
        .button.dt-button:first-child, div.dt-button:first-child, a.dt-button:first-child, input.dt-button:first-child{
            position: inherit !important;
            margin-top: 37px !important;
            margin-left: -150px !important;
        }
        .dataTables_paginate{
                color: black;
                float: right;
                padding: 8px 16px;
                text-decoration: none;
            }
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background: none;
            color: black;
            border-radius: 4px;
            border: 1px solid #828282;
            }
        .a.fg-button.ui-button.ui-state-default {
                padding-right: 10px;
            }        
        .dataTables_wrapper .dataTables_paginate .paginate_button:active {
            background: none;
            color: black;
            }
        a {
            color: #910dfd;
            text-decoration: auto !important;
            padding: 8px !important;
        }
    </style>
</head>
<body>

        <div class="card">
            <div class="card-header" style="background-color:orange;color:#fff;">
                Merchant Care Evaluation Data
            </div>
                <div class="card-body">
    <div  style="    border-bottom: 2px solid orange;margin-bottom: 15px;">
            
            <div>
         
            
        </div> 
    </div>
            
            
       
        <table id="example" class="table table-bordered table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Serial</th>
                    <th>Quality Evaluator</th>
                    <th>Agent Name</th>
                    <th>Interaction Date</th>
                    <th>Evaluation Date</th>

                    <th>Skill Group</th>
                    <th>Sampling Type</th>
                    <th>Case No</th>
                    <th>Order No</th>

                    <th>Category</th>
                    <th>Information Sub Category</th>
                    

                    <th>Greetings</th>
                    <th>Care & Enthusiasm</th>
                    <th>Communication</th>
                    <th>Soft Skills</th>

                    <th>Interaction Handling Skills</th>
                    <th>Probing</th>
                    <th>System Usage & Action</th>

                    <th>Sop Followed</th>
                    <th>Correct Info</th>
                    <th>Fatal Error</th>
                    <th>Fatal Reason</th>

                    <th>Training Required</th>
                    <th>Training Agenda</th>
                    <th>Behavior Training Topic</th>
                    <th>Resolution Training Topic</th>

                    <th>Comment</th>
                    
                </tr>
            </thead>

            <tbody>
            
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

        $(document).ready(function() {
                $('#example').DataTable( 
                {
                dom: 'Bfrtpi',
            
                buttons: [
                    'copy', 'excel'
                   
                    
                ]
            } );
        } );
    </script>
</body>
</html>
@endsection