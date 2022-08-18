<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use Session;

session_start();

class Student_show_all_teacher_controller extends Controller
{



  public function studentshowallteacher(){

 $allstudent_info=DB::table('teachers_tb1')
                  ->get();
$manage_student=view('student.student_show_all_teacher')
                   ->with('all_teacher_info',$allstudent_info);
          return view('student_layout')
          ->with('student_show_all_teacher',$manage_student);




  }




}
