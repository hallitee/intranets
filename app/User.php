<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    //
use Notifiable;

   protected $fillable = [
        'name', 'email', 'password','company_id','dept_id', 'admin'
		];

    protected $hidden = [
        'password', 'remember_token',
    ];
	public function isAdmin(){
		
		return $this->admin;
	}
	public function visitlogs(){
		
		return $this->hasMany('App\visitlog');
	}
}
