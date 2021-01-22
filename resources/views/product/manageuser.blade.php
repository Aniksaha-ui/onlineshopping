	@extends("UserPages.UserDashboard")
	@section("form")

	@section('styles')
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

	@endsection
	
	<div class="table-responsive bs-example widget-shadow" style="padding-right:7px;padding-left:7px; padding-bottom: 100px; padding-top: 30px; background-color: #659DBD">
						<h4 style="padding: 20px;text-align: center; color: black; font-family:Franklin Gothic Medium">Product Information</h4>
						<table class="table table-bordered" id="datatable" style="background-color: powderblue; ">
						 <thead> 
						 <tr> 
						 <th style="text-align: center;">ID</th>
						 <th style="text-align: center;">Product Name</th>
						 <th style="text-align: center;">Catagory name</th>
						 <th style="text-align: center;">Model name</th>
						 <th style="text-align: center;">product image</th>
						  <th style="text-align: center;">Action</th>  
						   </tr> 
						</thead> 
						   <tbody> 
						   @foreach($product as $product)
						   <tr> 
						   <th scope="row" style="text-align: center;">{{$product->id}}</th> 
						    <td style="text-align: center;">{{$product->p_name}}</td> 
						    <td style="text-align: center;">{{$product->c_name}}</td>
						    <td style="text-align: center;">{{$product->m_name}}</td> 
						  <td><img style="width: 90px; height: 60px; border-radius: 60%" src="{{$product->p_image}}"></td>  
						     <td style="text-align: center;">
                          <a href="{{url('/single/cart/')}}/{{$product->id}}" class="btn btn-success">
                            <span style="width: 50px; height: 10px; border-radius: 60%; color: black; font-size: 12px;" class="glyphicon glyphicon-plus">Order</span>
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