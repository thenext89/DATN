<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id')->default(0);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('country');
            $table->string('street_address');
            $table->string('town_city');
            $table->string('email');
            $table->string('phone');
            $table->tinyInteger('status')->default(0);
            $table->string('payment_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
