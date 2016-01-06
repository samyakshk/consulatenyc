<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable=[
'Status'

    ];

    public function passport()
{
return $this->belongsToMany('App\Passport');


}
}
