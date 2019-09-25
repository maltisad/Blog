<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     protected $primaryKey = 'comment_id';

       public Function posts(){
    	return $this->hasMany('App\Post','id');
}

}