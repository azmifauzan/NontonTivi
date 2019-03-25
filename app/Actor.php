<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
	protected $fillable = ['name','biodata','birth_plcae','birth_date','foto','website'];

    public function program()
    {
    	return $this->belongsToMany(App\Program::class);
    }
}
