<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products'; // Tên của bảng trong database
    protected $guarded = ['name','id_type','description','unit_price', 'promotion_price','image', 'unit', 'new']; // Lấy hết các trường trong bảng đó

    public $timestamps = true;

    public function type_products() {
    	return $this->hasMany('App\Type_product','id_type','id');
    }

    public function bill_details() {
    	return $this->belongsTo('App\Bill_detail','id_product');
    }
}
