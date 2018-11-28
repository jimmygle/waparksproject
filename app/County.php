<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{

	/**
	 * Timestamps are disabled.
	 */
	public $timestamps = false;

	/**
	 * The parks this county has in it.
	 */
	public function parks()
	{
		return $this->belongsToMany('App\Park');
	}

}
