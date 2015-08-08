<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRecetas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recetas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->float('precio');
            $table->float('costo');
            $table->integer('id_tipo_receta')->unsigned();
            $table->foreign('id_tipo_receta')->references('id')->on('tipos_recetas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recetas', function (Blueprint $table) {
            $table->drop('recetas');
        });
    }
}
