<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = "classes";
    protected $filllable = ['id', 'name', 'floor', 'number_of_students'];
    public $timestamp = true;

    public function Student(){
    	return $this->hasMany('App/Student');
    }
}
