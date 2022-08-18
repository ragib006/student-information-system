<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ALL_student_view_controller extends Controller
{
  public function allstudentviewcontroller($studentview){
              $student_description_view=DB::table('student_tb1')
                      ->select('*')
                      ->where('student_id',$studentview)
                      ->first();

                $manage_desprition_student=view('admin.all_student_view')
                                        ->with('description_profile',$student_description_view);
                                         return view('layout')
                                        ->with('all_student_view',$manage_desprition_student);



  }
}
