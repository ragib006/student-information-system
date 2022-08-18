<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();

class ALL_LOGO_DELATE_CONTROLLER extends Controller
{
      public function alllogodelate($delate){

        DB::table('tb1_logo')
        ->where('logo_id',$delate)
        ->delete();
        return Redirect::to('/all_logo');



      }
}
