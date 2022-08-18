<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();

class AddStudentsController extends Controller
{

  public function addstudent(){

  return view('admin.addstudent');

  }


///add student form ar action route jar madhome data base data save hoy

    public function savestudent(Request $request){

     $data=array();
              $data['student_name']=$request->student_name;
              $data['student_roll']=$request->student_roll;
              $data['student_fathers_name']=$request->student_fathers_name;
              $data['student__mothers_name']=$request->student__mothers_name;
              $data['student_email']=$request->student_email;
              $data['student_phone']=$request->student_phone;
              $data['student_address']=$request->student_address;
              $data['student_password']=md5($request->student_password);
              $data['student_admission_year']=$request->student_admission_year;
              $data['student_department']=$request->student_department;
              $image=$request->file('student_image');

           if($image){


              $random = Str::random(20);

               $ext=strtolower($image->getClientOriginalExtension());
               $image_full_name=$random.'.'.$ext;
               $upload_path='image/';
               $image_url=$upload_path.$image_full_name;
               $success=$image->move($upload_path,$image_full_name);

            if($success){

                $data['student_image']=$image_url;
                DB::table('student_tb1')->insert($data);
                Session::put('exception','student added successfully!!');
                return Redirect::to('/addstudent');


            }



           }

          // $data['image']=$image_url;
              //  DB::table('student_tb1')->insert($data);
              //  Session::put('exception','student added successfully!!');
              //  return Redirect::to('/addstudent');



              //  DB::table('student_tb1')->insert($data);
              //  Session::put('exception','student added successfully!!');
              //  return Redirect::to('/addstudent');


              $data['student_image']='';
                         DB::table('student_tb1')->insert($data);
                         Session::put('exception','student added successfully!!');
                         return Redirect::to('/addstudent');





    }



}
