<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use DB;

use Session;

session_start();

class Admin_password_change_controller extends Controller
{





  public function adminpasswordchange(){

    $student_id=Session::get('admin_email');
   $student_profile=DB::table('admin_tb1')
              //   ->select('*')
                ->where('admin_email',$student_id)
                 ->first();



                //     echo "</pre>";
                //     print_r($student_profile);
                //     echo "</pre>";



                    $manage_student=view('admin.admin_password_change')

                      ->with('user',$student_profile);


                        return view('layout')

                      ->with('admin_password_change',$manage_student);




//  }

//public function adminpasswordchange(){

    //$student= session()->get('admin_email');
  //  $user = DB::table('admin_tb1')->where('admin_email', $student)
        //  ->first();

    // return view('admin.admin_password_change', compact("user"));
    }





}
