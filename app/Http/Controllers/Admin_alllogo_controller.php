<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Admin_alllogo_controller extends Controller
{

      public function adminalllogo(){

        $all_brand_information=DB::table('tb1_LOGO')
                            ->get();
        $manage_brand=view('admin.all_admin_logo')
          ->with('all_logo_info',$all_brand_information);
          return view('layout')
        ->with('admin.all_admin_logo',$manage_brand);




      }
}
