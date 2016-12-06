<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleDetail extends Model
{
    protected $fillable = [
        'article_id','title', 'content'
    ];
    public function article(){
		return $this->belongsTo('App\Article');
	}
	public function files(){
    	return $this->morphMany('App\FileManagement','fileable');
    }
    public function getCoverAttribute(){
    	if($d=$this->files()->where('type','cover')->first()){
    		return url($d->base_url.$d->file_name.'.'.$d->extension);
    	}else{
    		return '';
    	}
    }
    public function getDirectoryPathAttribute(){
    	if($d=$this->files()->where('type','cover')->first()){
    		return $d->base_url;
    	}else{
    		return "";
    	}
    }
}
