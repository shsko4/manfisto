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
        Schema::create('penalty_owners', function (Blueprint $table) {
            $table->id();
            $table->string('name',150);
            $table->unsignedBigInteger('type_of_id_id');
            $table->string('id_no');
            $table->string('address',200)->nullable();
            $table->string('phone')->nullable();
            $table->unsignedBigInteger('office_id')->nullable();
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
        Schema::dropIfExists('penalty_owners');
    }
};
