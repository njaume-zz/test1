<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableArticulosReceetas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos_recetas', function (Blueprint $table) {
            $table->integer('id_articulo')->unsigned();
            $table->integer('id_receta')->unsigned();
            $table->float('cantidad');
            $table->foreign('id_articulo')->references('id')->on('articulos');
            $table->foreign('id_receta')->references('id')->on('recetas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articulos_recetas', function (Blueprint $table) {
            $table->drop('articulos_recetas');
        });
    }
}
