<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function isAdmin(){
        if($this->type=='admin'){
            return true;
        }
        return false;
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
