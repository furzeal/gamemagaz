<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderData extends Model
{
    public function product()
    {
        return $this->belongsTo('App\Product','product_id','id');
    }
    public function order()
{
    return $this->belongsTo('App\Order','order_id','id');
}
}
