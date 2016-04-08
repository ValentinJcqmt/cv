<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LightningCanvasController extends Controller
{
    public function home(){
    	return view('lightningCanvas.home');
    }
}
