<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Electric extends Model
{
    protected $table = "electrics";
    protected $filllable = ['id', 'room_id', 'time', 'old_number', 'new_number', 'price', 'status'];
    public $timestamp = true;

}
