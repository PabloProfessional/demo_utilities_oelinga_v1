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
        Schema::create('property_unit_metres', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('property_unit_id');
            $table->longText('description')->nullable();
            $table->integer('metre_type_id');
            $table->integer('metre_brand_id');
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
        Schema::dropIfExists('property_unit_metres');
    }
};
