<?php

namespace App\Http\Controllers;

use App\UsedCar;
use Illuminate\Http\Request;

use App\Http\Requests;

class UsedCarsController extends Controller {

    protected $usedCar;

    public function __construct(UsedCar $usedCar)
    {
        $this->usedCar = $usedCar;
    }

    public function display(Request $request)
    {
        $filters = [
            'marque'   => $request->marque,
            'prix_min' => (int)$request->prix_min,
            'prix_max' => (int)$request->prix_max
        ];

        $datas = $this->usedCar;

        if ($filters['marque'])
            $datas = $datas->ofMarque($filters['marque']);

        if ($filters['prix_min'] && $filters['prix_max'])
            $datas = $datas->ofPrice([$filters['prix_min'], $filters['prix_max']]);

        $datas = $datas->with('images')->paginate(16);

        $marques = $this->usedCar->lists('marque')->sort()->unique()->values()->toArray();

        return view('occasion.index', ['datas' => $datas, 'marques' => $marques, 'provider' => 'selsia']);
    }

    public function show($slug, $id)
    {
        $datas = $this->usedCar->with('images')->find($id);

        return view('occasion.show')->with(['datas' => $datas, 'provider' => 'selsia']);
    }
}
