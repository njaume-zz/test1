<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTiposrecetas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_recetas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->integer('tiempo_preparacion');
            $table->boolean('cocina');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tipos_recetas', function (Blueprint $table) {
            $table->drop('tipos_recetas');
        });
    }
}
