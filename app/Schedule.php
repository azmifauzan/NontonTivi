<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['channel_id','program_id','day','start','end']; 

    public function channel()
    {
        return $this->belongsTo('App\Channel');
    }

    public function program()
    {
        return $this->belongsTo('App\Program');
    }
}
