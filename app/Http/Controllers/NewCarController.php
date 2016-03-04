<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\DadAutoReader;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class NewCarController extends Controller {

    protected $reader;

    public function __construct(DadAutoReader $reader)
    {
        $this->reader = $reader;
    }

    public function home()
    {
        return view('home')->with('datas', $this->reader->get());
    }

    public function renderHomeNew()
    {
        return view('neuf.home-new');
    }

    public function renderHomeOccasion()
    {
        return view('occasion.home-occasion');
    }

    public function display()
    {
        return view('neuf.index-new')->with('datas', $this->reader->get());
    }

    public function show($slug, $id)
    {
        return view('neuf.show-new')->with('datas', $this->reader->show($id));

    }
    public function sendCarMail() {

        return view('layouts.contact');
    }
}
