<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasoRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paso_recetas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_paso')->unsigned();
            $table->integer('id_receta')->unsigned();
            $table->integer('tiempo');
            $table->primary(['id_paso','id_receta']);
            $table->foreign('id_paso')->references('id_paso')->on('pasos')->onDelete('cascade')->onUpgrade('cascade');
            $table->foreign('id_receta')->references('id_receta')->on('recetas')->onDelete('cascade')->onUpgrade('cascade');
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
        Schema::drop('paso__recetas');
    }
}
