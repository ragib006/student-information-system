<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();



class Active_logo_goto_unactive_controller extends Controller
{



  public function active_logo_unactive($amne){


            DB::table('tb1_logo')
            ->where('logo_id',$amne)
            ->update(['publication_status' => 0]);
            Session::put('exception','Active logo is now unactive');
            return Redirect::to('/all_logo');


  }



}
