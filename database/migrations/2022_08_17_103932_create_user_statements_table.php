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
        Schema::create('user_statements', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('bill_id')->nullable();
            $table->integer('transaction_id')->nullable();
            $table->integer('debit')->nullable();
            $table->integer('credit')->nullable();
            $table->integer('balance')->nullable();
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('user_statements');
    }
};
