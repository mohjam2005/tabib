<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class disease extends Model
{
    //
    public function addpatient()
	{
		return $this->hasMany('App\AddPatient');
	}


	public function category()
	{
		return $this->belongsTo('App\Category','Category_id')->orderBy('created_at');
	}
}
