@extends('layout')

@section('content')





              <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">





                          <h2 class="card-title">Basic form elements</h2>



                          <form class="forms-sample" method="post" action="{{URL::to('/update_cse_student',$description_profile->student_id)}}" enctype="multipart/form-data">

                                     {{ csrf_field() }}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Name</label>
                                  <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" value="{{($description_profile->student_name)}}">

                              </div>


                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Roll</label>
                                  <input type="text" class="form-control p-input" name="student_roll" aria-describedby="emailHelp" value="{{($description_profile->student_roll)}}" >

                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Fathers name</label>
                                  <input type="text" class="form-control p-input" name="student_fathers_name" aria-describedby="emailHelp" value="{{($description_profile->student_fathers_name)}}">

                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student mothers name</label>
                                  <input type="text" class="form-control p-input" name="student__mothers_name" aria-describedby="emailHelp" value="{{($description_profile->student__mothers_name)}}">

                              </div>



                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student email</label>
                                  <input type="text" class="form-control p-input" name="student_email" aria-describedby="emailHelp" value="{{($description_profile->student_email)}}">

                              </div>


                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student phone number</label>
                                  <input type="text" class="form-control p-input" name="student_phone" aria-describedby="emailHelp" value="{{($description_profile->student_phone)}}">

                              </div>


                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Address</label>
                                  <input type="text" class="form-control p-input" name="student_address" aria-describedby="emailHelp" value="{{($description_profile->student_address)}}">

                              </div>



                            <div class="form-group">
                                <label for="exampleInputEmail1">Student Password</label>
                                <input type="password" class="form-control p-input" name="student_password" aria-describedby="emailHelp" value="{{($description_profile->student_password)}}">

                            </div>



                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Admission Year </label>
                                  <input type="date" class="form-control p-input" name="student_admission_year" aria-describedby="emailHelp" value="{{($description_profile->student_admission_year)}}">

                              </div>


               <!----
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Department</label>

                              <select class="form-control p-input" name="student_department" value="{{($description_profile->student_department)}}">

                                <option value="1">CSE</option>
                                <option value="2">EEE</option>
                                <option value="3">IPE</option>
                                <option value="4">BBA</option>
                                <option value="5">ME</option>
                                <option value="6">CIVIL</option>


                                  </select>


                              </div>

                              --->




                              <button type="submit" class="btn btn-success">Update</button>
                          </form>
                      </div>
                  </div>
              </div>















@endsection
