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
        Schema::create('stock_recipts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('track_id')->nullable();
            $table->unsignedBigInteger('load_id')->nullable();
            $table->string('broker_name');
            $table->string('driver_name');
            $table->string('car_no');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('office_id');
            $table->softDeletes();
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
        Schema::dropIfExists('stock_recipts');
    }
};
