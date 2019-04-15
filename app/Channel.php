<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    protected $fillable = ['name','description','logo','website']; 

    public function schedule()
    {
    	return $this->hasMany('App\Schedule');
    }
}
