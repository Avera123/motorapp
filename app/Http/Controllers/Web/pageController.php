<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Brand;
use App\Coupon;

class pageController extends Controller
{
    public function InterClubes(){
        $brands = Brand::orderBy('id','DESC')->paginate(5);
        return view('brands.brands',compact('brands'));
    }

    public function description($slug){
        $brand = Brand::where('slug',$slug)->first();
        return view('brands.description', compact('brand'));
    }

    public function Coupons(){
        $coupons = Coupon::orderBy('id')->paginate(5);
        return view('coupons.coupons',compact('coupons'));
    }

    public function descriptionCoupon($id){
        $coupon = Coupon::where('id',$id)->first();
        return view('coupons.description', compact('coupon'));
    }

    public function couponsBrand($slug){
        $brand = Brand::where('slug',$slug)->first();
        $coupons = Coupon::where('idBrand',$brand->id)->orderBy('id')->where('active',true)->paginate(5);
        return view('coupons.couponsByBrand',compact('coupons','brand'));
    }
}
