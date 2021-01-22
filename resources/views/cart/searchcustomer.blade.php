@extends("AdminPages.Dashboard")

@section("form")
<div class="form-three widget-shadow" style="padding-right:100px;padding-left:100px; padding-bottom: 100px; padding-top: 30px; background-color: #659DBD">
              <div class=" panel-body-inputin">
              <p style="color: black;text-align: center;font-family: Arial;">Search Customer Order(ID)</p>
                 <form method="POST" class="form-horizontal" enctype="multipart/form-data">
                       {{csrf_field()}} 
                  <div class="form-group" style="margin-left: 200px;margin-left: 100px; padding-top: 30px; padding-bottom: 30px;">

        


                    <div class="form-group">
                    <label class="col-md-2 control-label">Customer ID</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-group-addon">
                          <i class="fa fa-circle-o"></i>
                        </span>
                        <input type="text" style="color: black;" class="form-control1" placeholder="Customer ID" name="c_id">
                      </div>
                      <br>
                   </div>
                    </div>




   <button style="margin-left: 400px;" type="submit" class="btn btn-">add new Product</button>
                  

                    </div>
                  
                </form>
              </div>
            </div>

@endsection