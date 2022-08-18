<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();








class CIVIL_student_edit_update_controller extends Controller
{


  public function updateeeestudent(Request $request,$civil_student_edit){

          $data=array();
          $data['student_name']=$request->student_name;
          $data['student_roll']=$request->student_roll;
          $data['student_fathers_name']=$request->student_fathers_name;
          $data['student__mothers_name']=$request->student__mothers_name;
          $data['student_email']=$request->student_email;
          $data['student_phone']=$request->student_phone;
          $data['student_address']=$request->student_address;
          $data['student_password']=MD5($request->student_password);
          $data['student_admission_year']=$request->student_admission_year;


        DB::table('student_tb1')
            ->where('student_id',$civil_student_edit)
            ->update($data);


            Session::put('exception','student information update successfully');
              return Redirect::to('/civil');


  }



}
