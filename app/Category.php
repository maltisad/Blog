<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'category_id';
    public $timestamps = false;

    public Function posts(){
    	return $this->hasMany('App\Post','category_id');
  
    }
}
