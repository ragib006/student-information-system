@extends('layout')

@section('content')





              <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">





                          <h2 class="card-title">Basic form elements</h2>



                          <form class="forms-sample" method="post" action="{{URL::to('/update_all_teacher',$description_profile->teachers_id)}}" enctype="multipart/form-data">

                                     {{ csrf_field() }}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Name</label>
                                  <input type="text" class="form-control p-input" name="teachers_name" aria-describedby="emailHelp" value="{{($description_profile->teachers_name)}}">

                              </div>











                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student phone number</label>
                                  <input type="text" class="form-control p-input" name="teachers_phone" aria-describedby="emailHelp" value="{{($description_profile->teachers_phone)}}">

                              </div>


                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Address</label>
                                  <input type="text" class="form-control p-input" name="teachers_address" aria-describedby="emailHelp" value="{{($description_profile->teachers_address)}}">

                              </div>















                              <button type="submit" class="btn btn-success">Update</button>
                          </form>
                      </div>
                  </div>
              </div>















@endsection
