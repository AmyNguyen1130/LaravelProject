<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $table = "issues";
    protected $filllable = ['id', 'content', 'student_id', 'room_id'];
    public $timestamp = true;
}
