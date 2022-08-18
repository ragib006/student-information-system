<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();

class Admin_logo_change_Form_Action_controller extends Controller
{


  public function adminlogochangeformaction(Request $request){

   $data=array();
           $data['logo_name']=$request->logo_name;
          $data['publication_status']=$request->publication_status;

            $image=$request->file('logo_image');

         if($image){


            $random = Str::random(20);

             $ext=strtolower($image->getClientOriginalExtension());
             $image_full_name=$random.'.'.$ext;
             $upload_path='image/';
             $image_url=$upload_path.$image_full_name;
             $success=$image->move($upload_path,$image_full_name);

          if($success){

              $data['logo_image']=$image_url;
              DB::table('tb1_logo')->insert($data);
              Session::put('exception','logo added successfully!!');
              return Redirect::to('/admin_logo');


          }



         }

         $data['logo_image']='';
                    DB::table('tb1_logo')->insert($data);
                    Session::put('exception','logo added successfully!!');
                    return Redirect::to('/admin_logo');






  }







}
