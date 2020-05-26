<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddPatient extends Model
{
	public function desease()
	{
		return $this->belongsToMany('App\disease','disease_id')->orderBy('created_at');
	}
	
    //
}
