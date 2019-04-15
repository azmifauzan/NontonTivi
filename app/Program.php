<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = ['name','description','website','productionhouse_id','production_year'];

    public function actor()
    {
    	return $this->belongsToMany(\App\Actor::class);
    }

    public function schedule()
    {
        return $this->hasMany('App\Schedule');
    }
}
