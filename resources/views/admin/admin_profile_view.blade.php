@extends('layout')



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
              <h2 class="card-title">Info</h2>

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

              <p class="name" style="font-family:cursive;">{{$user->admin_name}}</p>

              <a class="email" style="font-size:18px;padding-bottom:7px;">{{$user->admin_email}}</a>
              <a class="number" style="font-size:18px;font-family:cursive;padding-bottom:7px;">{{$user->admin_phone}}</a>
            </div>
          </div>
          <div class="card mb-6">
            <div class="card-body overview">
              <ul class="achivements">
                <li><p>34</p><p>Projects</p></li>
                <li><p>23</p><p>Task</p></li>
                <li><p>29</p><p>Completed</p></li>
              </ul>











              </div>
            </div>
          </div>
        </div>
      </div>

























@endsection
