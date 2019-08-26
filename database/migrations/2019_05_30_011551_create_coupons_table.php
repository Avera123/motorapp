<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150);
            $table->string('imgUrl', 255)->nullable();
            $table->string('description')->nullable();
            $table->dateTime('startDate');
            $table->dateTime('endingDate');
            $table->boolean('active');
            $table->unsignedInteger('idBrand');
            $table->string('slug',150)->unique()->nullable();
            $table->timestamps();
            $table->foreign('idBrand')
            ->references('id')
            ->on('brands')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
    }
}
