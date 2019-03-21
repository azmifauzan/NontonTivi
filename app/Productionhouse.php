<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productionhouse extends Model
{
	protected $fillable = ['name','description','address','website'];

    public function program()
    {
    	return $this->hasMany('App\Program');
    }
}
