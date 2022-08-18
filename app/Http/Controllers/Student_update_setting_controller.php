<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();
class Student_update_setting_controller extends Controller
{



  public function studentupdatesetting(Request $request){

          $student_id=Session::get('student_email');

          $data=array();
          $data['student_email']=$request->student_email;
          $data['student_phone']=$request->student_phone;
          $data['student_address']=$request->student_address;
          $data['student_password']=MD5($request->student_password);




        DB::table('student_tb1')
            ->where('student_email',$student_id)
            ->update($data);





            Session::put('exception','student information update successfully');
              return Redirect::to('/profile');


  }

}
