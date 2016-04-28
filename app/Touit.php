<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Touit extends Model
{

	public function __construct(array $attributes = array()){
	    $this->setRawAttributes(array(
	      'date' => Carbon::now()->toDateTimeString()
	    ), true);
	    parent::__construct($attributes);
	}

    protected $table = 'messages';

    protected $fillable = [
        'texte'
    ];

    protected $hidden = [
        'id', 'user_id'
    ];

    public $timestamps = false;

    public function user(){
    	return $this->belongsTo('App\User');
    }

}
