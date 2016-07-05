<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsedCarsImage extends Model
{
    protected $guarded = ['id'];

    protected $fillable = ['used_car_id', 'name', 'path', 'hash'];

    public function usedCar()
    {
        return $this->belongsTo('App\UsedCar');
    }
}
