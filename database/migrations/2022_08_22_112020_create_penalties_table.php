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
        Schema::create('penalties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('penalty_owner_id');
            $table->unsignedBigInteger('penalty_type_id');
            $table->string('location',200)->nullable();
            $table->string('car_no',200)->nullable();
            $table->decimal('vat',8,2)->default(0);
            $table->decimal('penalty_amount',8,2)->default(0);
            $table->decimal('stamp',8,2)->default(0);
            $table->decimal('tax3',8,2)->default(0);
            $table->decimal('tax4',8,2)->default(0);
            $table->decimal('total',8,2)->default(0);
            $table->string('note',200)->nullable();
            $table->string('recipt_no',200)->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('penalties');
    }
};
