<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            //$table->string('id', 36)->primary();
            $table->string('nama_bank',50);
            $table->string('atas_nama',50);
            $table->timestamp('tgl_transfer');
            $table->string('subject',100);
            $table->string('img',100);
            $table->integer('booking_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');


        });

       // DB::statement('ALTER Table payments add payment_id INTEGER NOT NULL UNIQUE AUTO_INCREMENT;');
        DB::update("ALTER TABLE payments AUTO_INCREMENT = 505001;");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
