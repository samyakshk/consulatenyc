<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
  protected $fillable=[
'title',
'details'
    ];

public function pages()
{

	return $this->hasMany('App\Pages');

}



}
