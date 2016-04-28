<?php

namespace App\Http\Controllers;

use Request;

use DB;

use App\Http\Requests;

use App\Hero;

class AppController extends Controller
{
    public function home(){
    	$heroList = DB::select('select * from heroes');
    	return view('heroapp.home', compact('heroList'));
    }

    public function create(){
    	return view('heroapp.create');
    }

    public function saveHero(Request $request){
    	$hero = new Hero;
    	return redirect('app');
    }

    protected function getStats(){
    	$stats = Array();
    }

}
