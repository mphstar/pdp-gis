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
        Schema::create('parameters', function (Blueprint $table) {
            $table->id();
            $table->string('color', 10);
            $table->double('ph_a');
            $table->double('ph_b');
            $table->double('suhu_a');
            $table->double('suhu_b');
            $table->double('hujan_a');
            $table->double('hujan_b');
            $table->double('tinggi_a');
            $table->double('tinggi_b');
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
        Schema::dropIfExists('parameters');
    }
};