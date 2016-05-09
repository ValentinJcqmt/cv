<?php

namespace App\Http\Controllers;

use App\UsedCar;
use Illuminate\Http\Request;

use App\Http\Requests;

class UsedCarsController extends Controller
{
    protected $usedCar;

    public function __construct(UsedCar $usedCar)
    {
        $this->usedCar = $usedCar;
    }

    public function display()
    {
        $datas = $this->usedCar->with('images')->paginate(15);

        return view('occasion.index', ['datas' => $datas, 'provider' => 'selsia']);
    }

    public function show($slug, $id)
    {
        $datas = $this->usedCar->with('images')->find($id);

        return view('occasion.show')->with(['datas' => $datas, 'provider' => 'selsia']);
    }
}
