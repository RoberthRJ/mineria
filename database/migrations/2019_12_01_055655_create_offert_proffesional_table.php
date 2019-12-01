<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffertProffesionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offert_proffesional', function (Blueprint $table) {
            $table->unsignedInteger('offert_id');
            $table->foreign('offert_id')->references('id')->on('offerts');
            $table->unsignedInteger('proffesional_id');
            $table->foreign('proffesional_id')->references('id')->on('proffesionals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offert_proffesional');
    }
}
