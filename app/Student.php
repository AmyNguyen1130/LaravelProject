<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "students";
    protected $filllable = ['id', 'code', 'name', 'birthday', 'gender', 'address', 'phone', 'room_id', 'class_id'];
    public $timestamp = true;

    public function Room(){
    	return $this->belongsTo('App/Room');
    }

    public function Class(){
    	return $this->belongsTo('App/Classes');
    }

    public function User(){
    	return $this->hasOne('App/User');
    }
}
