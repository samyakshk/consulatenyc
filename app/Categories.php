<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
  protected $fillable=[
'title',
'details',

    ];
protected $table='Categories';
public function pages()
{

	return $this->hasMany('App\Pages');

}



}
