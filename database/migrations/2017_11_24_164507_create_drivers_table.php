<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {

            $table->increments('id');
            //$table->string('id', 36)->primary();
            $table->string('nama_driver',50);
            $table->text('alamat');
            $table->string('no_telp',30);
            $table->timestamps();
        });

        DB::update("ALTER TABLE drivers AUTO_INCREMENT = 404001;");
         // DB::statement('ALTER Table drivers add driver_id INTEGER NOT NULL UNIQUE AUTO_INCREMENT;');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivers');
    }
}
