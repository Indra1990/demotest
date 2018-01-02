<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
	//public $incrementing = false;
	//protected $table = 'tours';

  	protected $fillable = [
        'kuota','harga', 
    ];

    public function bookings()
    {
    	return $this->belongsToMany('App\Booking');
    }

    
     
}
