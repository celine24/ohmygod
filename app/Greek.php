<?php

namespace greek;

use Illuminate\Database\Eloquent\Model;

class Greek extends Model {

	protected $table = 'greeks';
	public $timestamps = true;

	public function pv()
	{
		return $this->belongsTo('Pv');
	}

}