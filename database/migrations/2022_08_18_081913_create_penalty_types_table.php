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
        Schema::create('penalty_types', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->unsignedBigInteger('office_id');
            $table->softDeletes();
            $table->timestamps();
            $table->unique(['name', 'office_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penalty_types');
    }
};
