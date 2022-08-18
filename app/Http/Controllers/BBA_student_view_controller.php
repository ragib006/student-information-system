<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class BBA_student_view_controller extends Controller
{

  public function bbastudentviewcontroller($studentview){
              $bba_description_view=DB::table('student_tb1')
                      ->select('*')
                      ->where('student_id',$studentview)
                      ->first();

                $manage_desprition_student=view('admin.bba_student_view')
                                        ->with('bba_profile',$bba_description_view);
                                         return view('layout')
                                        ->with('bba_student_view',$manage_desprition_student);



  }




}
