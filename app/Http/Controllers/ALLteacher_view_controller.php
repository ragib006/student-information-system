<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ALLteacher_view_controller extends Controller
{


public function allteacherview($studentview){

  $student_description_view=DB::table('teachers_tb1')
          ->select('*')
          ->where('teachers_id',$studentview)
          ->first();

    $manage_desprition_student=view('admin.all_teacher_view')
                            ->with('description_profile',$student_description_view);
                             return view('layout')
                            ->with('all_teacher_view',$manage_desprition_student);




}



}
