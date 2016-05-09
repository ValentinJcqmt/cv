<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

    protected $fillable = ['names', 'phones', 'emails'];

    public function contactable()
    {
        return $this->morphTo();
    }
}
