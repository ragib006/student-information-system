<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();

class ALL_teacher_edit_update_controller extends Controller
{

public function allteacherupdate(Request $request,$all_student_edit){

        $data=array();
        $data['teachers_name']=$request->teachers_name;

        $data['teachers_phone']=$request->teachers_phone;
        $data['teachers_address']=$request->teachers_address;




      DB::table('teachers_tb1')
          ->where('teachers_id',$all_student_edit)
          ->update($data);


          Session::put('exception','student information update successfully');
            return Redirect::to('/allteacher');


}


}
