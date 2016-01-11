<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statuses extends Model
{
     protected $fillable=[
'Status_Name'

    ];

    public function passport()
{
return $this->belongsToMany('App\Passport')->withTimestamps();


}
}



