<?php

namespace host;

use Illuminate\Database\Eloquent\Model;

class Host extends Model {

	protected $table = 'hosts';
	public $timestamps = true;

	public function pv()
	{
		return $this->belongsTo('Pv');
	}

}