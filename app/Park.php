<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Park extends Model
{

	/**
	 * The counties this park belongs to.
	 */
    public function counties()
    {
    	return $this->belongsToMany('App\County');
    }

}
