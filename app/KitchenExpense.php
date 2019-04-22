<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KitchenExpense extends Model
{
    protected $table = "Kitchen_Expenses";
    protected $filllable = ['id', 'time', 'item', 'quantity', 'price'];
    public $timestamp = true;
}
