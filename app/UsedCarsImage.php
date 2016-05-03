<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsedCarsImage extends Model
{
    protected $guarded = ['id'];

    public function usedCar()
    {
        return $this->belongsTo('App\UsedCar');
    }
}
