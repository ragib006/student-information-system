<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();



class Student_login_controller extends Controller
{

public function dashboardforstudent(){


return view('student.student_dashboard');

}




public function login_student_dashboard(Request $request){






                           $email=$request->student_email;

                           $password=MD5($request->student_password);


                           $result=DB::table('student_tb1')

                          ->where('student_email',$email)

                          ->where('student_password',$password)

                          ->first();



                          if($result){


                        Session::put('student_email',$result->student_email);

                         Session::put('student_password',$result->student_password);

                         return Redirect::to('/student_dashboard');

                      }


                      else{


                         Session::put('exception','email or password invalied');
                           return Redirect::to('/');



                             }


}














}
