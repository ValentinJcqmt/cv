<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;

use DB;

use Carbon\Carbon;

use Auth;

class TouitteurController extends Controller
{
    public function home(){
    	$touitList = DB::select("select texte, date, messages.id, plus, moins, userid, name from messages, users where messages.userid = users.id order by date desc limit 0, 10");
		return view('touitteur.home', compact('touitList'));
    }

    public function addTouit(Request $request)
    {
    	$touitData = $request::all();

    	$date = Carbon::now();
		DB::table('messages')->insert(
		    array(	'texte' => $touitData['texte'],
		    		'date' => $date,
                    'userid' => Auth::user()->id)
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

    public function login(){
        return view('touitteur.login');
    }
}