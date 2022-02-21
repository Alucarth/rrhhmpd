<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            $table->string('name');//nombre  del cargo
            $table->enum('type_dependency', ['Gerencia Ejecutiva','Gerencia', 'Unidad'])->nullable(); //dependencia
            $table->bigInteger('unit_id')->nullable();
            $table->foreign('unit_id')->references('id')->on('unities');
            $table->bigInteger('managament_id')->nullable();
            $table->foreign('managament_id')->references('id')->on('managements');
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
        Schema::dropIfExists('positions');
    }
}
