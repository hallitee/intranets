<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class depts extends Model
{
    //
	public function company(){
		return $this->belongsTo('App\company');
	}
}
