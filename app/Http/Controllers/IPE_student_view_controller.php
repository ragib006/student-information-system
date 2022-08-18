<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class IPE_student_view_controller extends Controller
{

  public function ipestudentviewcontroller($studentview){
              $ipe_description_view=DB::table('student_tb1')
                      ->select('*')
                      ->where('student_id',$studentview)
                      ->first();

                $manage_desprition_student=view('admin.ipe_student_view')
                                        ->with('ipe_profile',$ipe_description_view);
                                         return view('layout')
                                        ->with('ipe_student_view',$manage_desprition_student);



  }



}
