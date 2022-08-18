<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

session_start();

class Un_active_logo_goto_active_controller extends Controller
{



  public function unactive_logo_active($amne){


            DB::table('tb1_logo')
            ->where('logo_id',$amne)
            ->update(['publication_status' => 1]);
            Session::put('exception','Unactive logo is now active');
            return Redirect::to('/all_logo');


  }





}
