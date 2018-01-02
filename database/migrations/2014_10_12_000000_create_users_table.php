<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            //$table->string('id', 36)->primary();

            $table->string('name',100);
            $table->string('username',100);
            $table->string('email',100)->unique();
            $table->tinyInteger('role')->default(1);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::update("ALTER TABLE users AUTO_INCREMENT = 101001;");
        //DB::statement('ALTER Table users add user_id INTEGER NOT NULL UNIQUE AUTO_INCREMENT;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
