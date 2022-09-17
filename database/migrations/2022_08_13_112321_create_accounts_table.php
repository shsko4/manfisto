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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->unsignedBigInteger('manfisto_id')->nullable();
            $table->unsignedBigInteger('penalty_id')->nullable();
            $table->unsignedBigInteger('custom_id')->nullable();
            $table->string('name',100);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('office_id');
            $table->string('recipt_no',50);
            $table->decimal('total',8,2);
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
        Schema::dropIfExists('accounts');
    }
};
