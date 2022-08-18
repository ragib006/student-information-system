<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CIVIL_student_view_controller extends Controller
{

  public function civilstudentviewcontroller($studentview){
              $civil_description_view=DB::table('student_tb1')
                      ->select('*')
                      ->where('student_id',$studentview)
                      ->first();

                $manage_desprition_student=view('admin.civil_student_view')
                                        ->with('civil_profile',$civil_description_view);
                                         return view('layout')
                                        ->with('civil_student_view',$manage_desprition_student);



  }




}
