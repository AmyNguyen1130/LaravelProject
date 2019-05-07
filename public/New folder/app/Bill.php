<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bills'; // Tên của bảng trong database
    protected $guarded = ['id_customer','date_order','total','payment','note']; // Lấy hết các trường trong bảng đó

    public $timestamps = true;

    public function customers() {
    	return $this->hasMany('App\Customer','id_customer','id');
    }

    public function bill_details() {
    	return $this->belongsTo('App\Bill_detail','id_product');
    }
}
