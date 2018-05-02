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
            $table->increments('id');
            $table->string('name');
            $table->double('price');
            $table->text('description');
            $table->string('model');
            $table->string('body_type');
            $table->string('construction_year');
            $table->string('colour');
            $table->string('mileage');
            $table->string('transmission');
            $table->string('fuel');
            $table->string('weight');
            $table->string('decoration');
            $table->string('cylinder_capacity');
            $table->string('c02_emission');
            $table->string('consumption_of');
            $table->string('consumption_city');
            $table->string('consumption_highway');
            $table->string('energy_label');
            $table->string('vat_margin');
            $table->double('new_price');
            $table->string('minimum_driver_age');
            $table->integer('show')->default(1);
            $table->integer('sold')->default(1);
            $table->integer('rent')->default(1);
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
