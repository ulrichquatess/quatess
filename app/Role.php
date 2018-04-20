<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
**
*Here the role can belong to more than one admin
*/

class Role extends Model
{
    public function user(){  
        
        return $this->hasMany('App\User');
	}
}
