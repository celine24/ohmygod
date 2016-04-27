<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pv extends Model {

	protected $table = 'pvs';
	public $timestamps = true;

	public function greek()
	{
		return $this->belongsTo('App\Greek', 'greek_id');
	}

	public function host()
	{
		return $this->belongsTo('App\Host', 'host_id');
	}

	public function group()
	{
		return $this->belongsTo('App\Group', 'group_id');
	}

}