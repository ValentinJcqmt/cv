<?php

namespace App\Http\Controllers;

use App\ConceptAutoReader;
use App\UsedCar;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    /**
     * @var ConceptAutoReader
     */
    private $reader;

    /**
     * @var UsedCar
     */
    private $usedCar;

    public function __construct(ConceptAutoReader $reader, UsedCar $usedCar)
    {
        $this->reader = $reader;
        $this->usedCar = $usedCar;
    }

    public function home()
    {
        $newCars = $this->reader->get([]);
        $usedCars = $this->usedCar->orderBy('created_at','desc')->take(8)->with('images')->get();

        return view('home')->with(compact('newCars','usedCars'));
    }

}
