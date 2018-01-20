<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {

            $table->increments('id');
            //$table->string('id', 36)->primary();
            $table->string('kuota', 50);
            $table->integer('harga');
            $table->timestamps();
        });
        
        DB::update("ALTER TABLE tours AUTO_INCREMENT = 303001;");

       //DB::statement('ALTER Table tours add tour_id INTEGER NOT NULL UNIQUE AUTO_INCREMENT;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
