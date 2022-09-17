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
        Schema::create('custom_certificates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('custom_id');
            $table->integer('serial');
            $table->string('name');
            $table->string('cert_no');
            $table->decimal('cert_recipt_no',10,2);
            $table->decimal('nolon',10,2);
            $table->decimal('stamp',8,2);
            $table->decimal('bpt',8,2);
            $table->decimal('vat',8,2);
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
        Schema::dropIfExists('custom_certificates');
    }
};
