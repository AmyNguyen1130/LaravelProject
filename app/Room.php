<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = "rooms";
    protected $filllable = ['id', 'name', 'floor', 'number_of_members'];
    public $timestamp = true;

    public function Student(){
    	return $this->hasMany('App/Room');
    }
}
