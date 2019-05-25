<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    use Notifiable;
    protected $table = "users";
    protected $filllable = ['id', 'email', 'password', 'role'];
    public $timestamp = true;

    public function Educator()
    {
        return $this->hasOne('App/Educator');
    }

    public function Student()
    {
        return $this->hasOne('App/Student');
    }
}
