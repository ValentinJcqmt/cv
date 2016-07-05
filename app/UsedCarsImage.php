<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsedCarsImage extends Model
{
    protected $guarded = ['id'];

    protected $fillable = ['used_car_id', 'name', 'path', 'hash'];

    protected $appends = ['urlImage'];

    public function usedCar()
    {
        return $this->belongsTo('App\UsedCar');
    }

    public function getUrlImageAttribute()
    {
        return  asset('assets/providers/selsia/images/'.$this->name);
    }
}
