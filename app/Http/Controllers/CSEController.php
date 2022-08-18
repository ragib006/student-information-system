<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CSEController extends Controller
{

  public function cse(){


//  return view('admin.cse');



  $csestudent_info=DB::table('student_tb1')
                ->where(['student_department'=>1])
                   ->get();

                   $manage_cse=view('admin.cse')
                                      ->with('cse_student_info',$csestudent_info);
                             return view('layout')
                                      ->with('cse',$manage_cse);
                                      return view('admin.cse');





  }




}
