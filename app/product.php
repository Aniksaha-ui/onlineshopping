<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
       protected $fillable = [
        'c_id','p_name','m_name','p_price','s_price','w_price','d_price','p_quan','p_image',
    ];


}
