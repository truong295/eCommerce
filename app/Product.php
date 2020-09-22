<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = "Products"; // nay la cau hinh ten trong tale sql
    protected $fillable = [
        'name', 
        'price'
    ];
   public function Category()
   {
       return $this->belongsTo('App\Category');
   }
   public function Manufacturer()
   {
       return $this->belongsTo('App\Manufacturer');
   }
   public function Order()
   {
       return $this->hasMany('App\Order');
   }
}
