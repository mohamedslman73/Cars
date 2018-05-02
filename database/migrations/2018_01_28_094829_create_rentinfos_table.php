<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('location');
            $table->date('pickup_date');
            $table->time('pickup_time');
            $table->date('return_date');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('company_title')->nullable();
            $table->string('email');
            $table->string('phone');
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
        Schema::dropIfExists('rentinfos');
    }
}
