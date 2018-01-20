<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {

            $table->increments('id');
            //$table->string('id', 36)->primary();
            $table->string('kode_booking');
            $table->timestamp('tanggal_liburan');
            $table->string('status',10)->default('unpaid');
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });

        //DB::statement('ALTER Table bookings add booking_id INTEGER NOT NULL UNIQUE AUTO_INCREMENT;');
        DB::update("ALTER TABLE bookings AUTO_INCREMENT = 202001;");


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
