<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\DadAutoReader;

class NewCarController extends Controller {

    public function display(DadAutoReader $reader)
    {
        $datas = $reader->get();

        return view('neuf.index-new')->with('datas', $datas);
    }
}
