<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissaoInternaUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missao_interna_usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('missao')->unsigned();
            $table->foreign('missao')->references('id')->on('missao_interna');
            $table->integer('usuario')->unsigned();
            $table->foreign('usuario')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::drop('missao_interna_usuario');
    }
}
