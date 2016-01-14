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
		 return $this->status()->latest()->first();
		//dd($this->status[0]);
		//$allStatus=$this->status()->orderBy('updated_at')->first();
		//dd($allStatus);
		//return $allStatus[0]->Status_Name;
		//dd($allStatus[0]->attributes["Status_Name"]);
		//dd($this->status()->get());
		//return $allStatus[0]->attributes["Status_Name"];
		//dd($allStatus);
	}

}
