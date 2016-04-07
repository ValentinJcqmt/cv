<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;

use DB;

use Carbon\Carbon;

class TouitteurController extends Controller
{
    public function home(){
    	$touitList = DB::select("select texte, date, id, plus, moins from messages order by date desc limit 0, 10");
		return view('touitteur.home', compact('touitList'));
    }

    public function addTouit(){
    	$touitData = Request::all();
    	$date = Carbon::now();
		DB::table('messages')->insert(
		    array(	'texte' => $touitData['texte'],
		    		'date' => $date)
		); 	
    	return redirect()->back();
    }

    public function addPlus($touitId){
    	DB::table('messages')->where('id', '=', $touitId)->increment('plus');
    	return redirect()->back();
    }

    public function addMoins($touitId){
    	DB::table('messages')->where('id', '=', $touitId)->increment('moins');
    	return redirect()->back();
    }

    public function delete($touitId){
    	DB::table('messages')->where('id', '=', $touitId)->delete();
    	return redirect()->back();
    }
}