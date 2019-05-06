<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users'; // Tên của bảng trong database
    protected $guarded = ['full_name','email','password','phone', 'address', 'remember_token']; // Lấy hết các trường trong bảng đó

    public $timestamps = true;
}
