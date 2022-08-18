<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();

class Student_show_his_profile_controller extends Controller
{

  public function studentshowhisprofile(){


    $student_id=Session::get('student_id');
    $student_profile=DB::table('student_tb1')
            ->select('*')
            ->where('student_id',$student_id)
            ->first();


    $man_desprition_student=view('student.student_show_his_profile')
                              ->with('student_own_profile',$student_profile);
                             return view('student_layout')
                            ->with('Student_show_his_profile',$man_desprition_student);

  // return view('student.student_show_his_profile');


  }


}
