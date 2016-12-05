<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileManagement extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		'attachment_type_id',
		'name',
        'file_type',//image,video
        'is_online',
        'base_url',
        'file_name',
		'extension',
		//'fileable_id', //unknown colomn
		//'fileable_type',
        'type',//cover, gallery
        // 'original_name',
    ];

    protected $appends = [
        'url',
        'url_small',
        'url_medium',
        'url_thumb'
    ];

    protected $hidden = [
        'base_url',
        'extension',
        'fileable_id',
        'created_at',
        'updated_at',
    ];

	public function getUrlAttribute(){
        if($this->is_online == 1){
            return $this->base_url;
        }
        else if ($this->type == 'gallery'){
            return asset($this->base_url.'normal/'.$this->file_name.'.'.$this->extension);
        }
        else{
            return asset($this->base_url.$this->file_name.'.'.$this->extension);
        }
    }
	public function getUrlSmallAttribute(){
        if($this->is_online == 1){
            return $this->base_url;
        }
        else{
            return asset($this->base_url.'small/'.$this->file_name.'.'.$this->extension);
        }
    }
	public function getUrlMediumAttribute(){
        if($this->is_online == 1){
            return $this->base_url;
        }
        else{
            return asset($this->base_url.'medium/'.$this->file_name.'.'.$this->extension);
        }
    }
	public function getUrlThumbAttribute(){
        if($this->is_online == 1){
            return $this->base_url;
        }
        else{
            return asset($this->base_url.'thumb/'.$this->file_name.'.'.$this->extension);
        }
    }
    public function fileable()
    {
        return $this->morphTo();
    }
}
