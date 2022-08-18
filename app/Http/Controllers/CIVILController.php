<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CIVILController extends Controller
{

  public function civil(){


  //return view('admin.civil');
  $civilstudent_info=DB::table('student_tb1')
                ->where(['student_department'=>6])
                   ->get();

                   $manage_civil=view('admin.civil')
                                      ->with('civil_student_info',$civilstudent_info);
                             return view('layout')
                                      ->with('civil',$manage_civil);
                                      return view('admin.civil');


  }


}
