	@extends("AdminPages.Dashboard")
	@section("form")

	@section('styles')
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

	@endsection
	
	<div class="table-responsive bs-example widget-shadow" style="padding-right:100px;padding-left:100px; padding-bottom: 100px; padding-top: 30px; background-color: #659DBD">
						<h4 style="padding: 20px;text-align: center; color: black; font-family:Franklin Gothic Medium">Catagory Information</h4>
						<table class="table table-bordered" id="datatable" style="background-color: powderblue;">
						 <thead> 
						 <tr> 
						 <th style="text-align: center;">ID</th>
						 <th style="text-align: center;">Catagory Name</th>  
						 <th style="text-align: center;">Action</th>  
						   </tr> 
						</thead> 
						   <tbody> 
						   @foreach($catagory as $catagory)
						   <tr> 
						   <th scope="row" style="text-align: center;">{{$catagory->id}}</th> 
						    <td style="text-align: center;">{{$catagory->c_name}}</td> 
						    <td style="text-align: center;">
                          <a href="{{URL('catagory/edit/'.$catagory->id)}}" class="btn btn-success">
                            <span style="width: 50px; height: 10px; border-radius: 60%; color: black; font-size: 12px;" class="glyphicon glyphicon-edit">Edit</span>  
                            <a href="{{URL('catagory/delete/'.$catagory->id)}}" class="btn btn-danger">
                            <span  style="width: 50px; height: 10px; border-radius: 60%;color: black; px;"  class="glyphicon glyphicon-trash">Del</span>
                            

                          </td>

						
						   
						     </tr> 
						     @endforeach
						   </tbody> 
						</table> 
					</div>



@endsection

@section('javascripts')
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#datatable').DataTable();
        });
    </script>
@endsection