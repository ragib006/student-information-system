<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();

class CSE_student_delate_controller extends Controller
{


  public function csestudentdelateoption($student_id_delate){

   DB::table('student_tb1')
      ->where('student_id',$student_id_delate)
       ->delete();
       return Redirect::to('/cse');

  }





}
