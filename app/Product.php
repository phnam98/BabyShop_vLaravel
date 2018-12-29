<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";

    public function product_type(){
        return $this->belongsTo('app\ProDuctType','id_type','id');
    }
    public function bill_detail(){
        return $this->hasMany('app\BillDetail','id_product','id');
    }
}
