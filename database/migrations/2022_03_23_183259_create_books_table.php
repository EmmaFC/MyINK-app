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
        Schema::create('books', function (Blueprint $table) {

            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('author');
            $table->integer('year');
            $table->string('genre');
            $table->string('cover')->nullable();
            $table->integer('pages');
            $table->text('description');
            $table->string('collection');
            $table->string('publishing_house');
            $table->string('edition');
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
        Schema::dropIfExists('books');
    }
};
