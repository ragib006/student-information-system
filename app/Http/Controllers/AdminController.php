<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();






class AdminController extends Controller
{



//viewprofile and setting show page
public function viewprofile(){


return view('admin.viewprofile');



}


public function setting(){


return view('admin.setting');



}










//admin dashboard logout

public function logout(){


Session::put('admin_name',null);
Session::put('admin_id',null);
return Redirect::to('/backend');


}







//admin dashboard login
//   and
//logo route
  public function admin_dashboard(){


  return view('admin.dashboard');



  }


 public function login_dashboard(Request $request){






                            $email=$request->admin_email;

                            $password=MD5($request->admin_password);


                            $result=DB::table('admin_tb1')

                           ->where('admin_email',$email)

                           ->where('admin_password',$password)

                           ->first();



                           if($result){


                         Session::put('admin_email',$result->admin_email);

                          Session::put('admin_password',$result->admin_password    );

                          return Redirect::to('/admin_dashboard');

                       }


                       else{


                          Session::put('exception','email or password invalied');
                            return Redirect::to('/backend');



                              }


 }






}
