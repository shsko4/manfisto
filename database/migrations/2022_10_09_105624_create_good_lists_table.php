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
        Schema::create('good_lists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('unit_id');
            $table->decimal('vat',10,2);
            $table->decimal('bpt',10,2);
            $table->decimal('final_tax',10,2);
            $table->decimal('prod_tax',10,2);
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
        Schema::dropIfExists('good_lists');
    }
};
