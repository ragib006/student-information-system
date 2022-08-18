<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();

class ALLteacherController extends Controller
{

    public function all_teacher(){




     $allteacher_information=DB::table('teachers_tb1')
                      ->get();
    $manage_all_teacher=view('admin.allteacher')
                       ->with('all_teacher_info',$allteacher_information);
              return view('layout')
              ->with('allteacher',$manage_all_teacher);








    }


}
