<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class IPEController extends Controller
{

  public function ipe(){


//  return view('admin.ipe');
$ipestudent_info=DB::table('student_tb1')
              ->where(['student_department'=>3])
                 ->get();

                 $manage_ipe=view('admin.ipe')
                                    ->with('ipe_student_info',$ipestudent_info);
                           return view('layout')
                                    ->with('ipe',$manage_ipe);
                                    return view('admin.ipe');






  }





}
