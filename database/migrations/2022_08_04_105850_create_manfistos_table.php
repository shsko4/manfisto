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
        Schema::create('manfistos', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('man_no');
            $table->unsignedBigInteger('transporter_id');
            $table->string('car_no');
            $table->string('dest')->nullable();
            $table->unsignedBigInteger('city_id');
            $table->string('size')->nullable();
            $table->decimal('nolon',8,2);
            $table->decimal('vat',8,2);
            $table->decimal('bpt',8,2);
            $table->decimal('bpt2',8,2);
            $table->integer('status')->default(1);
            $table->string('recipt_no',50)->nullable();
            $table->unsignedBigInteger('acc_user_id')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('office_id');
            $table->softDeletes();
            $table->timestamps();
            $table->unique(['man_no', 'transporter_id']);

            $table->foreign('acc_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manfistos');
    }
};
