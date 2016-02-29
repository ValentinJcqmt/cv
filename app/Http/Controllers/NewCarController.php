<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\DadAutoReader;

class NewCarController extends Controller {

    public function display(Request $request)
    {
        if (!$request->page) {
            $page = 1;
        } else {
            $page = $request->page;
        }

        $reader = new DadAutoReader();
        $datas = $reader->get($page);

        return view('neuf.index-new')->with('datas', $datas);

    }
}
