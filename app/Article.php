<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'content','author'
    ];
    protected $appends = ['avg_rating'];
    public function article_detail(){
		return $this->hasMany('App\ArticleDetail');
	}
	public function getAvgRatingAttribute(){
		$ratings = Rating::where('article_id',$this->id)->get();
		if(count($ratings) > 0){
			$total_point = $ratings->sum('rating');
			$rating_count = count($ratings);
			return $total_point/$rating_count;
		}else{
			return "No ratings";
		}
	}
}
