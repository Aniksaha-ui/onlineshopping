@extends("AdminPages.Dashboard")
@section("form")

<div class="form-three widget-shadow">
              <div class=" panel-body-inputin">
                <form class="form-horizontal" method="POST">
                      {{csrf_field()}} 
                 <div class="form-group" style="margin-left: 200px;margin-left: 100px; padding-top: 30px; padding-bottom: 30px;">
                    <label class="col-md-2 control-label">Catagory name</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-group-addon">
                          <i class="fa fa-circle-o"></i>
                        </span>
                        <input type="text" style="color: black;" class="form-control1" placeholder="Enter catagory name" name="c_name">
                      </div>
                      <br>

   
                   </div>

                    </div>
                  <button style="margin-left: 200px;" type="submit" class="btn btn-primary">add new catagory</button>
                </form>
              </div>
            </div>
@endsection