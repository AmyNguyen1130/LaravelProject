<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers'; // Tên của bảng trong database
    protected $guarded = ['name','gender','email','address','phone_number','note']; // Lấy hết các trường trong bảng đó

    public $timestamps = true;

    public function bills() {
    	return $this->belongsTo('App\Bill','id_customer');
    }
}
