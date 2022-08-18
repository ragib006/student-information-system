<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use DB;

use Session;

session_start();
class Student_setting_controller extends Controller
{

  public function studentsetting(){

    $student_id=Session::get('student_email');
     $student_profile=DB::table('student_tb1')
                 ->select('*')
                  ->where('student_email',$student_id)
                  ->first();



                //     echo "</pre>";
                //     print_r($student_profile);
                //     echo "</pre>";



                     $manage_student=view('student.student_setting')

                      ->with('student',$student_profile);


                         return view('student_layout')

                       ->with('student_setting',$manage_student);




  }


}
