<?php

use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Coupon::class, 4) -> create()->each(function(App\Coupon $coupon){
            $coupon->brand()->associate([rand(1,4)]);
        });
        
    }
}
