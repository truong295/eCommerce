<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $table="manufacturers";
   public function Category()
   {
       return $this->belongsTo('App\Category');
   }
   public function Product()
   {
       return $this->hasMany('App\Product');
   }
}
