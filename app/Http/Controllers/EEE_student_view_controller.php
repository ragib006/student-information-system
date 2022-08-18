<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EEE_student_view_controller extends Controller
{



  public function eeestudentviewcontroller($studentview){
              $eee_description_view=DB::table('student_tb1')
                      ->select('*')
                      ->where('student_id',$studentview)
                      ->first();

                $manage_desprition_student=view('admin.eee_student_view')
                                        ->with('eee_profile',$eee_description_view);
                                         return view('layout')
                                        ->with('eee_student_view',$manage_desprition_student);



  }



}
