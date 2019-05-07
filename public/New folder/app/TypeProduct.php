<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeProduct extends Model
{
    protected $table = 'type_products'; // Tên của bảng trong database
    protected $guarded = ['id', 'name','description','image']; // Lấy hết các trường trong bảng đó

    public $timestamps = true;

    public function products() {
    	return $this->belongsTo('App\Product','id_type');
    }
}
