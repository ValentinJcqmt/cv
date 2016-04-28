<?php

namespace App\Http\Controllers;

use Request;

use Mail;

use App\Http\Requests;

class CvController extends Controller
{
    public function home(){
    	return view('cv.home');
    }

    public function creation(){
    	return view('cv.creation');
    }

    public function cv(){
    	return view('cv.cv');
    }
}
