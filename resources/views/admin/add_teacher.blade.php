@extends('layout')

@section('content')





<div class="card" style="width:500px;">
      <div class="card-body">
        <h2 class="card-title">Data table</h2>

        <p style="background:#28C76F;color:white;padding-left:10px;font-family:cursive;border-radius:5px;width:285px;">
             <?php
             $exception=Session::get('exception');
             if($exception)
             {
             echo $exception;
             Session::put('exception',null);
             }
             ?>
             </p>



                          <h2 class="card-title">Add Teacher</h2>



                          <form class="forms-sample" method="post" action="{{URL::to('/save_teacher')}}" enctype="multipart/form-data">

                                     {{ csrf_field() }}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Name</label>
                                  <input type="text" class="form-control p-input" name="teachers_name" aria-describedby="emailHelp" placeholder="Enter teacher name">

                              </div>


                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Phone Number</label>
                                  <input type="text" class="form-control p-input" name="teachers_phone" aria-describedby="emailHelp" placeholder="Enter teacher phn number">

                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Address</label>
                                  <input type="text" class="form-control p-input" name="teachers_address" aria-describedby="emailHelp" placeholder="Enter teacher address">

                              </div>








                              <div class="form-group">
                                  <label>Upload Teacher Image</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
                                      <input type="file" class="form-control-file" name="teachers_image" id="exampleInputFile2" aria-describedby="fileHelp">
                                      <small id="fileHelp" class="form-text text-muted"></small>
                                    </div>
                                  </div>
                              </div>




                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Department</label>

                                  <select class="form-control p-input" name="teachers_department">

                                <option value="1">CSE</option>
                                <option value="2">EEE</option>
                                <option value="3">IPE</option>
                                <option value="4">BBA</option>
                                <option value="5">ME</option>
                                <option value="6">CIVIL</option>


                                  </select>


                              </div>





                              <button type="submit" class="btn btn-success">add teacher</button>
                          </form>
                      </div>
                  </div>
              </div>















@endsection
