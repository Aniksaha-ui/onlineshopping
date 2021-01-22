<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{

		 protected $fillable = [
    	'p_id','user_id','quantity','price','active'

    ];

      function product(){
    	return $this->belongsTo('App\product','p_id');
    }
}
