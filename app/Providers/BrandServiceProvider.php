<?php
namespace App\Providers;
use App\Brand;
use Illuminate\Support\ServiceProvider;
class BrandServiceProvider extends ServiceProvider{
    public function boot(){
        view()->composer('*',function($view){
            $view->with('brand_array', Brand::pluck('name','id'));
        });
    }
}