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
        Schema::create('company', function (Blueprint $table) {

            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->string('email')->unique();
            $table->string('adress');
            $table->integer('phone_number');
            $table->string('city');
            $table->string('location');
            $table->string('country');
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
        Schema::dropIfExists('companies');
    }
};
