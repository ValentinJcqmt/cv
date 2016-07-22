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

    public function display(Request $request)
    {
        $filters = [
            'marque'   => strtolower($request->marque),
            'prix_min' => $request->prix_min,
            'prix_max' => $request->prix_max
        ];

        return view('neuf.index-new')->with(['datas' => $this->reader->get($filters), 'marques' => $this->reader->getMarques(), 'provider' => $this->provider]);
    }

    public function show($slug, $id)
    {
        return view('neuf.show-new')->with(['datas' => $this->reader->show($id), 'provider' => $this->provider]);
    }
}
