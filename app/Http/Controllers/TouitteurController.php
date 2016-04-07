<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class TouitteurController extends Controller
{
    public function home(){
    	$touitList = DB::select("select texte from messages");
    	$touits::all();
		return $touits;
    }
}
