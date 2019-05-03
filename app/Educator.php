<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Educator extends Model
{
    protected $table = "educators";
    protected $filllable = ['id', 'code', 'name', 'birthday', 'gender', 'address', 'phone', 'quanlification'];
    public $timestamp = true;

    public function Class(){
    	return $this->hasMany('App/Classes');
    }

    public function User(){
    	return $this->hasOne('App/User');
    }
}
