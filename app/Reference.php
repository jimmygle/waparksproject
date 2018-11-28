<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{

	public function park()
	{
		return $this->belongsTo('App\Park');
	}

}
