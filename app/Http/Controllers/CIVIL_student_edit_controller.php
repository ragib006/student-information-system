<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CIVIL_student_edit_controller extends Controller
{

  public function civilstudenteditcontroller($studentview){


    $student_description_view=DB::table('student_tb1')
            ->select('*')
            ->where('student_id',$studentview)
            ->first();

      $manage_desprition_student=view('admin.civil_student_edit')
                              ->with('description_profile',$student_description_view);
                               return view('layout')
                              ->with('civil_student_edit',$manage_desprition_student);



  }



}
