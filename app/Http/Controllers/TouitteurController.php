<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;

use App\Touit;

use DB;

use Carbon\Carbon;

use Auth;

class TouitteurController extends Controller
{
    public function home(){
        $touitList = Touit::orderBy('date', 'desc')->get();
		return view('touitteur.home', compact('touitList'));
    }

    public function addTouit(Request $request)
    {
        //Creating and saving Touit class
        $touit = new Touit;
        $touit->texte = $request::all()['texte'];
        $touit->user_id = Auth::user()->id;
		$touit->save();

        session()->flash('flash_message_success', "Votre touit a bien été enregitré!");

    	return redirect()->back()->with([
            'flash_message_success' => "Votre touit a bien été enregitré!"
        ]);
    }

    public function addPlus($touitId){
    	Touit::find($touitId)->increment('plus');
    	return redirect()->back();
    }

    public function addMoins($touitId){
    	Touit::find($touitId)->increment('moins');
    	return redirect()->back();
    }

    public function delete($touitId){
        $touit = Touit::find($touitId);
        if (Auth::user()->id == $touit->user_id){
        	$touit->delete();
            session()->flash('flash_message_success', "Votre touit a bien été supprimé!");
        }
        else{
            session()->flash('flash_message_danger', "Action impossible!");      
        }

        

        return redirect()->back();
    }

    public function login(){
        return view('touitteur.login');
    }
}