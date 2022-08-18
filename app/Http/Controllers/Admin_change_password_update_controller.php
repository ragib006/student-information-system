<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();

class Admin_change_password_update_controller extends Controller
{




    public function adminpasswordupdate(Request $request){

            $student_id=Session::get('admin_email');

            $data=array();
            $data['admin_email']=$request->admin_email;
            $data['admin_phone']=$request->admin_phone;

            $data['admin_password']=MD5($request->admin_password);




          DB::table('admin_tb1')
              ->where('admin_email',$student_id)
              ->update($data);





              Session::put('exception','admin information update successfully');
                return Redirect::to('/admin_profile_view');


    }





}
