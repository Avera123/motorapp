<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable = [
        'name','imgUrl','description','startDate','endingDate','active','idBrand', 'slug'
    ];

    public function brand(){
        return $this->belongsTo(Brand::class , 'idBrand');
    }
}
