<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{

	//protected $table = 'drivers';
	//public $incrementing = false;


  protected $fillable = [
          'nama_driver','alamat'
      ];

  public function bookings()
  {
    return $this->belongsToMany('App\Booking');
  }
}
