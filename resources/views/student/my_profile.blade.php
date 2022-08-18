@extends('student_layout')



@section('content')





<?php

function convert_department($value){

$department=[

    1=>'CSE',
    2=>'EEE',
    3=>'IPE',
    4=>'BBA',
    5=>'ME',
    6=>'CIVIL',
];
return $department[$value];

}

?>









      <div class="row user-profile">
        <div class="col-lg-12 side-left" style="width:500px;">
          <div class="card mb-6">
            <div class="card-body avatar">

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

              <h2 class="card-title">Info</h2>



              <img src="{{URL::to($user->student_image)}}"  alt="">
              <p class="name" style="font-family:cursive;">{{$user->student_name}}</p>
              <p class="designation"style="font-size:18px;font-family:cursive;">{{$user->student_roll}}</p>
              <a class="email" style="font-size:18px;padding-bottom:7px;">{{$user->student_email}}</a>
              <a class="number" style="font-size:18px;font-family:cursive;padding-bottom:7px;">{{$user->student_phone}}</a>
            </div>
          </div>
          <div class="card mb-6">
            <div class="card-body overview">

              <div class="wrapper about-user">
                <h2 class="card-title mt-4 mb-3"style="font-weight:bold;color:green; font-family:cursive;">Student Information:</h2>

              </div>
              <div class="info-links">


                <div class="mother" style="padding-bottom:10px;display:block;">
                  <i class="icon-social-facebook icon"></i>
                      <span style="font-family:cursive;">Student Fathers Name: </span><span style="font-family:cursive;">{{$user->student_fathers_name}}</span>

                </div>




                <div class="mother" style="padding-bottom:10px;display:block;">
                  <i class="icon-social-facebook icon"></i>
                      <span style="font-family:cursive;">Student Mothers Name: </span><span style="font-family:cursive;">{{$user->student__mothers_name}}</span>

                </div>

                <div class="mother" style="padding-bottom:10px;display:block;">
                  <i class="icon-social-facebook icon"></i>
                      <span style="font-family:cursive;">Student Address: </span><span style="font-family:cursive;">{{$user->student_address}}</span>

                </div>

                <div class="mother" style="padding-bottom:10px;display:block;">
                  <i class="icon-social-facebook icon"></i>
                      <span style="font-family:cursive;">Student Department Name: </span><span style="font-family:cursive;">{{convert_department($user->student_department)}}</span>

                </div>

                <div class="mother" style="padding-bottom:10px;display:block;">
                  <i class="icon-social-facebook icon"></i>
                      <span style="font-family:cursive;">Student Admission Year: </span><span style="font-family:cursive;">{{$user->student_admission_year}}</span>

                </div>


              </div>
            </div>
          </div>
        </div>









      </div>




















@endsection
