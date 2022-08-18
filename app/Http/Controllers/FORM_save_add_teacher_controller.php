<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();






class FORM_save_add_teacher_controller extends Controller
{



  ///add teacher ar form ar action route  saveteacher  jar form ai rout diye action kore data base a data inserrt kore

      public function saveteacher(Request $request){

       $data=array();
       $data['teachers_name']=$request->teachers_name;

       $data['teachers_phone']=$request->teachers_phone;
       $data['teachers_address']=$request->teachers_address;


       $data['teachers_department']=$request->teachers_department;
       $image=$request->file('teachers_image');

             if($image){


                $random = Str::random(20);

                 $ext=strtolower($image->getClientOriginalExtension());
                 $image_full_name=$random.'.'.$ext;
                 $upload_path='image/';
                 $image_url=$upload_path.$image_full_name;
                 $success=$image->move($upload_path,$image_full_name);

              if($success){

                  $data['teachers_image']=$image_url;
                  DB::table('teachers_tb1')->insert($data);
                  Session::put('exception','teacher added successfully!!');
                  return Redirect::to('/addteacher');


              }



             }

             $data['image']=$image_url;
                  DB::table('teachers_tb1')->insert($data);
                  Session::put('exception','teacher added successfully!!');
                  return Redirect::to('/addteacher');



                  DB::table('teachers_tb1')->insert($data);
                  Session::put('exception','teacher added successfully!!');
                  return Redirect::to('/addteacher');




      }






}
