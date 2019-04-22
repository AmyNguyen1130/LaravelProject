<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "Users";
    protected $filllable = ['id', 'code', 'username', 'password', 'role'];
    public $timestamp = true;

    public function Educator(){
    	return $this->hasOne('App/Educator');
    }

    public function Student(){
    	return $this->hasOne('App/Student');
    }
}
