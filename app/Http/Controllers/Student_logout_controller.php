<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();


class Student_logout_controller extends Controller
{


public function studentlogout(){





  Session::put('student_name',null);
  Session::put('student_id',null);
  return Redirect::to('/');






}

}
