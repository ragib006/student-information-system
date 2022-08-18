@extends('layout')

@section('content')





              <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">

                        <p class="alert-danger">
                            <?php
                            $exception=Session::get('exception');
                            if($exception)
                            {
                            echo $exception;
                            Session::put('exception',null);
                            }
                            ?>
                            </p>



                          <h2 class="card-title">Add Student</h2>



                          <form class="forms-sample" method="post" action="{{URL::to('/save_student')}}" enctype="multipart/form-data">

                                     {{ csrf_field() }}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Name</label>
                                  <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" placeholder="Enter student name">

                              </div>


                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Roll</label>
                                  <input type="text" class="form-control p-input" name="student_roll" aria-describedby="emailHelp" placeholder="Enter student roll">

                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Fathers name</label>
                                  <input type="text" class="form-control p-input" name="student_fathers_name" aria-describedby="emailHelp" placeholder="Enter student Fathers name">

                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student mothers name</label>
                                  <input type="text" class="form-control p-input" name="student__mothers_name" aria-describedby="emailHelp" placeholder="Enter student mothers name">

                              </div>



                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student email</label>
                                  <input type="text" class="form-control p-input" name="student_email" aria-describedby="emailHelp" placeholder="Enter student email">

                              </div>


                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student phone number</label>
                                  <input type="text" class="form-control p-input" name="student_phone" aria-describedby="emailHelp" placeholder="Enter student phone number">

                              </div>


                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Address</label>
                                  <input type="text" class="form-control p-input" name="student_address" aria-describedby="emailHelp" placeholder="Enter student address">

                              </div>


                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Password</label>
                                  <input type="password" class="form-control p-input" name="student_password" aria-describedby="emailHelp" placeholder="Enter student password">

                              </div>




                              <div class="form-group">
                                  <label>Upload Student Image</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
                                      <input type="file" class="form-control-file" name="student_image" id="exampleInputFile2" aria-describedby="fileHelp">
                                      <small id="fileHelp" class="form-text text-muted"></small>
                                    </div>
                                  </div>
                              </div>


                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Admission Year </label>
                                  <input type="date" class="form-control p-input" name="student_admission_year" aria-describedby="emailHelp" placeholder="Enter student admission year">

                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Department</label>

                                  <select class="form-control p-input" name="student_department">

                                <option value="1">CSE</option>
                                <option value="2">EEE</option>
                                <option value="3">IPE</option>
                                <option value="4">BBA</option>
                                <option value="5">ME</option>
                                <option value="6">CIVIL</option>


                                  </select>


                              </div>





                              <button type="submit" class="btn btn-success">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>















@endsection
