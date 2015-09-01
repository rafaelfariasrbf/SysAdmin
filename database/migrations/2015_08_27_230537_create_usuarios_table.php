<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',50);
            $table->string('posto_grad', 10);
            $table->date('data_praca');
            $table->string('user', 50)->unique();
            $table->string('senha', 50);
            $table->integer('status');
            $table->foreign('status')->references('id')->on('status');
            $table->string('foto', 100)->nullable();
            $table->rememberToken();
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
        Schema::drop('usuarios');
    }
}
