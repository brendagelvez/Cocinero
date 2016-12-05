<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtensilioPasosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utensilio_pasos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_utensilio')->unsigned();
            $table->integer('id_paso')->unsigned();
            $table->primary(['id_paso','id_utensilio']);
            $table->foreign('id_utensilio')->references('id_utensilio')->on('utensilios')->onDelete('cascade')->onUpgrade('cascade');
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
        Schema::drop('utensilio__pasos');
    }
}
