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
        Schema::create('generator_metre_readings', function (Blueprint $table) {
            $table->id();
            $table->integer('metre_id');
            $table->bigInteger('reading');
            $table->string('measurement_unit')->default('Wh');
            $table->longText('notes')->nullable();
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
        Schema::dropIfExists('generator_metre_readings');
    }
};
