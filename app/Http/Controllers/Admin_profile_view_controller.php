<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use DB;

use Session;

session_start();

class Admin_profile_view_controller extends Controller
{
    public function adminprofileview(){

   $student_id=Session::get('admin_email');
     $student_profile=DB::table('admin_tb1')
                   ->select('*')
                   ->where('admin_email',$student_id)
                   ->first();






       //echo "</pre>";
       //print_r($student_profile);
      // echo "</pre>";

         $manage_student=view('admin.admin_profile_view')
                     ->with('user',$student_profile);


                      return view('layout')

                    ->with('admin_profile_view',$manage_student);

}





//   public function  adminprofileview(){

//     $student= session()->get('admin_email');
//     $user = DB::table('admin_tb1')->where('admin_email', $student)
    //     ->first();

    //  return view('admin.admin_profile_view', compact("user"));
//  }


}
