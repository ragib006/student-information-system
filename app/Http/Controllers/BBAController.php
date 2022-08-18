<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class BBAController extends Controller
{

  public function bba(){


//  return view('admin.bba');



$bbastudent_info=DB::table('student_tb1')
              ->where(['student_department'=>4])
                 ->get();

                 $manage_bba=view('admin.bba')
                                    ->with('bba_student_info',$bbastudent_info);
                           return view('layout')
                                    ->with('bba',$manage_bba);
                                    return view('admin.bba');









  }


}
