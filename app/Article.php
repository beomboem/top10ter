<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'content','author'
    ];
    public function article_detail(){
		return $this->hasMany('App\ArticleDetail');
	}
	
}
