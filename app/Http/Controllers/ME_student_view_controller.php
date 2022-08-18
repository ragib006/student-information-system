<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ME_student_view_controller extends Controller
{


  public function mestudentviewcontroller($studentview){
              $me_description_view=DB::table('student_tb1')
                      ->select('*')
                      ->where('student_id',$studentview)
                      ->first();

                $manage_desprition_student=view('admin.me_student_view')
                                        ->with('me_profile',$me_description_view);
                                         return view('layout')
                                        ->with('me_student_view',$manage_desprition_student);



  }



}
