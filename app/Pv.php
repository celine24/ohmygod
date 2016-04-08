<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pv extends Model {

	protected $table = 'pvs';
	public $timestamps = true;

	public function pvGreek()
	{
		return $this->hasOne('Greek', 'greek_id');
	}

	public function pvHost()
	{
		return $this->hasOne('Host', 'host_id');
	}

	public function group()
	{
		return $this->belongsTo('Group');
	}

}