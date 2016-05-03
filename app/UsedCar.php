<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsedCar extends Model {

    protected $guarded = ['id'];

    public function images()
    {
        return $this->hasMany('App\UsedCarsImage');
    }
}
