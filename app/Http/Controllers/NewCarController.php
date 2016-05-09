<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\DadAutoReader;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class NewCarController extends Controller {

    protected $reader;

    protected $provider;

    public function __construct(DadAutoReader $reader)
    {
        $this->reader = $reader;
        $this->provider = 'dad-auto';
    }

    public function home()
    {
        return view('home')->with(['datas' => $this->reader->get(), 'provider' => $this->provider]);
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
        return view('neuf.index-new')->with(['datas' => $this->reader->get(), 'provider' => $this->provider]);
    }

    public function show($slug, $id)
    {
        return view('neuf.show-new')->with(['datas' => $this->reader->show($id), 'provider' => $this->provider]);
    }

    public function sendCarMail()
    {
        return view('layouts.contact');
    }
}
