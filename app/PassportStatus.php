<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PassportStatus extends Model
{
   protected $fillable=[
   'passport_id',
   'statuses_id'
  ];
}
