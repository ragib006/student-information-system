<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class MEController extends Controller
{

  public function me(){


//  return view('admin.me');

$mestudent_info=DB::table('student_tb1')
              ->where(['student_department'=>5])
                 ->get();

                 $manage_me=view('admin.me')
                                    ->with('me_student_info',$mestudent_info);
                           return view('layout')
                                    ->with('ipe',$manage_me);
                                    return view('admin.me');








  }




}
