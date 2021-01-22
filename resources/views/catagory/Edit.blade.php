@extends("AdminPages.Dashboard")
@section("form")

<div class="form-three widget-shadow">
              <div class=" panel-body-inputin">
     <form class="form-horizontal" method="POST" action="{{url('/updateCatagory')}}" enctype="multipart/form-data">
                      {{csrf_field()}} 
                       @foreach($catagories as $catagories)
                  <div class="form-group">
                    <label class="col-md-2 control-label">Catagory name</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-group-addon">
                          <i class="fa fa-circle-o"></i>
                        </span>
                        <input type="text" value="{{$catagories->c_name}}" style="color: black;" class="form-control1" placeholder="Enter catagory name" name="c_name">
                      </div>
                      <br>
                      @endforeach

   <button style="margin-left: 200px;" type="submit" class="btn btn-primary">Update</button>
                   </div>

                    </div>
                  
                </form>
              </div>
            </div>
             <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
@endsection
