<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = "classes";
    protected $filllable = ['id', 'name', 'educator_id', 'number_of_students'];
    public $timestamp = true;

    public function Educator(){
    	return $this->belongsTo('App/Educator');
    }

    public function Student(){
    	return $this->hasMany('App/Student');
    }
}
