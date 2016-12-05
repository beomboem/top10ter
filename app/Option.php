<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = [
        'polling_id','answer'
    ];
    public function polling(){
		return $this->belongsTo('App\Polling');
	}
}
