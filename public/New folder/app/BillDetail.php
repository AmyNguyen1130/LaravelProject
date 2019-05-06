<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table = 'bill_details'; // Tên của bảng trong database
    protected $guarded = ['id_bill','id_product','quantity','unit_price']; // Lấy hết các trường trong bảng đó

    public $timestamps = true;

    public function bills() {
    	return $this->hasMany('App\Bill','id_bill','id');
    }

	public function products() {
    	return $this->hasMany('App\Product','id_product','id');
    }    
}
