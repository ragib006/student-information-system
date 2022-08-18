<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class EEEController extends Controller
{

  public function eee(){


  //return view('admin.eee');

  $eeestudent_info=DB::table('student_tb1')
                ->where(['student_department'=>2])
                   ->get();

                   $manage_eee=view('admin.eee')
                                      ->with('eee_student_info',$eeestudent_info);
                             return view('layout')
                                      ->with('eee',$manage_eee);
                                      return view('admin.eee');





  }













  }
