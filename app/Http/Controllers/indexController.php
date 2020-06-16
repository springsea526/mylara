<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  DB;
class indexController extends Controller
{
    //
    public function index(){
    	$data=DB::table('theone')->get();
    	return view('first')->with("data",$data);
    }
}
