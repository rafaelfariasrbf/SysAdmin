<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissaoExternaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missao_externa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('local', 50);
            $table->string('descricao', 50);
            $table->date('data_inicio');
            $table->date('data_termino');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('missao_externa', function (Blueprint $table) {
            Schema::drop('missao_externa');
        });
    }
}
