<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Misconduct extends Model
{
    protected $table = "Misconducts";
    protected $filllable = ['id', 'student_id', 'content', 'time', 'minus'];
    public $timestamp = true;
}
