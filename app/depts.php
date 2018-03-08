<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class depts extends Model
{
    //
	public function company(){
		return $this->belongsTo('App\company');
	}
	public function location(){
		return $this->belongsTo('App\location');
	}
}
