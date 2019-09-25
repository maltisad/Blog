<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     public function category(){
    	  return $this->belongsTo('App\Category','category_id');
    }

    public function comment(){
    	 return $this->belongsTo('App\Comment','post_id');
    }

  
}
