<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();

class ALLteacher_delate_controller extends Controller
{

  public function allteacherdelateoption($student_id_delate){

   DB::table('teachers_tb1')
      ->where('teachers_id',$student_id_delate)
       ->delete();
       return Redirect::to('/allteacher');

  }

}
