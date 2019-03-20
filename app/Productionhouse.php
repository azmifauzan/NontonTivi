<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productionhouse extends Model
{
    public function program()
    {
    	return $this->hasMany('App\Program');
    }
}
