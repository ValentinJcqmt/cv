<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class portfolioJSController extends Controller
{
    public function home(){
    	return view('portfolioJS.app');
    }
}
