<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'name', 'logoUrl', 'description', 'slug',
    ];

    public function coupons(){
        return $this->hasMany('App\Coupon');
    }
}
