<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Polling extends Model
{
    protected $fillable = [
        'question'
    ];
    public function option(){
		return $this->hasMany('App\Option');
	}
}
