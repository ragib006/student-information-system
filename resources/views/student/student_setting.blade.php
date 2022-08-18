@extends('student_layout')

@section('content')





              <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">





                          <h2 class="card-title">Up Date Your Profile</h2>



                          <form class="forms-sample" method="post" action="{{URL::to('/student_updtade_setting')}}" enctype="multipart/form-data">

                                     {{ csrf_field() }}















                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student phone number</label>
                                  <input type="text" class="form-control p-input" name="student_phone" aria-describedby="emailHelp" value="{{($student->student_phone)}}">

                              </div>


                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student email</label>
                                  <input type="text" class="form-control p-input" name="student_email" aria-describedby="emailHelp" value="{{($student->student_email)}}">

                              </div>


                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Address</label>
                                  <input type="text" class="form-control p-input" name="student_address" aria-describedby="emailHelp" value="{{($student->student_address)}}">

                              </div>



                            <div class="form-group">
                                <label for="exampleInputEmail1">Student Password</label>
                                <input type="password" class="form-control p-input" name="student_password" aria-describedby="emailHelp" value="{{($student->student_password)}}">

                            </div>










                              <button type="submit" class="btn btn-success">Update</button>
                          </form>
                      </div>
                  </div>
              </div>















@endsection
