<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    protected $fillable=[
'Full_Name',
'Date_of_Birth',
'Passport_Number',
'status_id',
'comments',
'Delivered_to_owner'
    ];


public function status()
{

	return $this->belongsToMany('App\Status')->withTimesamps();

}

}
