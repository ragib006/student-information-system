<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ALLteacher_edit_controller extends Controller
{
   public function allteacheredit($studentview){


     $student_description_view=DB::table('teachers_tb1')
             ->select('*')
             ->where('teachers_id',$studentview)
             ->first();

       $manage_desprition_student=view('admin.all_teacher_edit')
                               ->with('description_profile',$student_description_view);
                                return view('layout')
                               ->with('all_teacher_edit',$manage_desprition_student);



   }


}
