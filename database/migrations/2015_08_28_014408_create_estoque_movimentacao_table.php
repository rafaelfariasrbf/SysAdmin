<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstoqueMovimentacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estoque_movimentacao', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('material')->unsigned();
            $table->foreign('material')->references('id')->on('material');
            $table->integer('quantidade');
            $table->integer('usuario')->unsigned();
            $table->foreign('usuario')->references('id')->on('usuarios');
            $table->string('motivo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::drop('estoque_movimentacao');
    }
}
