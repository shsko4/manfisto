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
        Schema::create('manfisto_lists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('track_id');
            $table->unsignedBigInteger('load_id');
            $table->decimal('nolon',10,2);
            $table->decimal('vat',10,2);
            $table->decimal('bpt',10,2);
            $table->decimal('bpt_agent',10,2);
            $table->decimal('total',10,2);
            $table->string('year');
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
        Schema::dropIfExists('manfisto_lists');
    }
};
