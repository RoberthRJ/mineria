<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Offert;

class CreateOffertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offerts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedInteger('location_id');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->unsignedInteger('area_id');
            $table->foreign('area_id')->references('id')->on('areas');
            $table->string('title');
            $table->text('description');
            $table->string('slug');
            $table->enum('status', [Offert::PUBLISHED, Offert::PENDING, Offert::REJECTED])->default(Offert::PENDING);
            $table->boolean('previous_approved')->default(false);
            $table->boolean('previous_rejected')->default(false);
            $table->datetime('expiration_date');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offerts');
    }
}
