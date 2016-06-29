<?php

namespace App\Http\Controllers;

use App\ConceptAutoReader;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class NewCarController extends Controller {

    protected $reader;

    protected $provider;

    public function __construct(ConceptAutoReader $reader)
    {
        $this->reader = $reader;
        $this->provider = 'conceptauto';
    }

    public function display()
    {
        return view('neuf.index-new')->with(['datas' => $this->reader->get(), 'provider' => $this->provider]);
    }

    public function show($slug, $id)
    {
        return view('neuf.show-new')->with(['datas' => $this->reader->show($id), 'provider' => $this->provider]);
    }
}
