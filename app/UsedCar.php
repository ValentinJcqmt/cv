<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsedCar extends Model {

    protected $guarded = ['id'];

    protected $appends = ['slug'];

    public function images()
    {
        return $this->hasMany('App\UsedCarsImage');
    }

    public function contacts()
    {
        return $this->morphMany('App\Contact', 'contactable');
    }

    public function getSlugAttribute()
    {
        return url('voitures-occasions').'/'. str_slug($this->marque.'-'.$this->model.'-'.$this->version, '-').'/'.$this->id;
    }

    public function scopeOfMarque($query, $marque)
    {
        return $query->where('marque', $marque);
    }

    public function scopeOfPrice($query, array $price)
    {
        return $query->whereBetween('price', $price);
    }
}
