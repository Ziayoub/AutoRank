<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 1000);
            $table->string('registration_number');
            $table->integer('production_year');
            $table->double('price');
            $table->double('kilometers');
            $table->integer('seats');
            $table->enum('fuel', ['gasoline','diesel']);
            $table->enum('speed', ['automatic','manual']);

            $table->unsignedBigInteger('agency_id');
            $table->unsignedBigInteger('model_id');

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
        Schema::dropIfExists('cars');
    }
}
