<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model {

	protected $table = 'groups';
	public $timestamps = true;

//	public function pvs()
//	{
//		return $this->hasMany('App\Pv');
//	}

}