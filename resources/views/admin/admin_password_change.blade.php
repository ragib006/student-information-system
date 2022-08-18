@extends('layout')

@section('content')





              <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">





                          <h2 class="card-title">Up Date Your Profile</h2>



                          <form class="forms-sample" method="post" action="{{URL::to('/admin_password_update')}}" enctype="multipart/form-data">

                                     {{ csrf_field() }}



                              <div class="form-group">
                                  <label for="exampleInputEmail1">Admin phone number</label>
                                  <input type="text" class="form-control p-input" name="admin_phone" aria-describedby="emailHelp" value="{{($user->admin_phone)}}">

                              </div>


                              <div class="form-group">
                                  <label for="exampleInputEmail1">Admin email</label>
                                  <input type="text" class="form-control p-input" name="admin_email" aria-describedby="emailHelp" value="{{($user->admin_email)}}">

                              </div>






                            <div class="form-group">
                                <label for="exampleInputEmail1">Admin Password</label>
                                <input type="password" class="form-control p-input" name="admin_password" aria-describedby="emailHelp" value="{{($user->admin_password)}}">

                            </div>










                              <button type="submit" class="btn btn-success">Update</button>
                          </form>
                      </div>
                  </div>
              </div>















@endsection
