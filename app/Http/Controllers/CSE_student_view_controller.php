<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CSE_student_view_controller extends Controller
{


  public function csestudentviewcontroller($studentview){
              $cse_description_view=DB::table('student_tb1')
                      ->select('*')
                      ->where('student_id',$studentview)
                      ->first();

                $manage_desprition_student=view('admin.cse_student_view')
                                        ->with('cse_profile',$cse_description_view);
                                         return view('layout')
                                        ->with('cse_student_view',$manage_desprition_student);



  }




}
