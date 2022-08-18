<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();



class My_profile_controller extends Controller{

      public function username(){

       $student_id=Session::get('student_email');
        $student_profile=DB::table('student_tb1')
                       ->select('*')
                       ->where('student_email',$student_id)
                       ->first();






  		//  echo "</pre>";
      //  print_r($student_profile);
      //   echo "</pre>";

           $manage_student=view('student.my_profile')
                       ->with('user',$student_profile);


                         return view('student_layout')

                        ->with('my_profile',$manage_student);

  }






//another  way to write query

//public function username(){

  //   $student= session()->get('student_email');
  //  $user = DB::table('student_tb1')->where('student_email', $student)
      //  ->first();

    // return view('student.my_profile', compact("user"));
 //}



}
