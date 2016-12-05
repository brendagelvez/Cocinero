<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientePasosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingrediente_pasos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_ingrediente')->unsigned();
            $table->integer('id_paso')->unsigned();
            $table->primary(['id_paso','id_ingrediente']);
            $table->foreign('id_ingrediente')->references('id_ingrediente')->on('ingredientes')->onDelete('cascade')->onUpgrade('cascade');
            $table->foreign('id_paso')->references('id_paso')->on('pasos')->onDelete('cascade')->onUpgrade('cascade');
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
        Schema::drop('ingrediente__pasos');
    }
}
