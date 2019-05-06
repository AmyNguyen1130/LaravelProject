<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table = 'slide'; // Tên của bảng trong database
    protected $guarded = ['link', 'image']; // Lấy hết các trường trong bảng đó

    public $timestamps = true;
}
