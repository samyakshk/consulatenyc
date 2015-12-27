<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $fillable=[
'title',
'details',
'image',
'category_id',
'is_published'
    ];




//A page has a category

public function category()
{
return $this->belongsTo('App\Categories');


}

}
