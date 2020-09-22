<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table="order_details";
   public function Product()
   {
       return $this->hasMany('App\Product');
   }
}
