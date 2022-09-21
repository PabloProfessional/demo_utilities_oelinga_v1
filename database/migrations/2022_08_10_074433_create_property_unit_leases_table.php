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
        Schema::create('property_unit_leases', function (Blueprint $table) {
            $table->id();
            $table->integer('property_unit_id');
            $table->integer('user_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('file')->nullable(); // PDF or Doc copy of lease agreement
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
        Schema::dropIfExists('property_unit_leases');
    }
};
