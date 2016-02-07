<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
	    protected $fillable=[
	'Full_Name',
	'Date_of_Birth',
	'Passport_Number',
	'comments',
	'Delivered_to_owner'
	    ];


	public function status()
	{

		return $this->belongsToMany('App\Statuses',"passport_statuses","passport_id","statuses_id")->withTimestamps();
		
	}

	public function latestStatus()
	{
		
		return $this->status()->orderBy('passport_statuses.updated_at', 'desc')->first();
		
	}
	public function searchstatus()
	{
		
		
		
	}

}
