<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\DadAutoReader;

class NewCarController extends Controller {

    protected $reader;

    public function __construct(DadAutoReader $reader)
    {
        $this->reader = $reader;
    }

    public function display()
    {
        return view('neuf.index-new')->with('datas', $this->reader->get());
    }

    public function show($id)
    {
        return view('neuf.show-new')->with('datas', $this->reader->show($id));
    }
}
