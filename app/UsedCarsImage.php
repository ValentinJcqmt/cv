<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsedCarsImage extends Model
{
    public function usedCar()
    {
        return $this->belongsTo('App\UsedCar');
    }
}
