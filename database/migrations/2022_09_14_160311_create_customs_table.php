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
        Schema::create('customs', function (Blueprint $table) {
            $table->id();
            $table->string('driver_name');
            $table->string('car_no');
            $table->date('date_of_trip');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('office_id');
            $table->string('recipt_no',200)->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->unique(['car_no', 'date_of_trip']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customs');
    }
};
