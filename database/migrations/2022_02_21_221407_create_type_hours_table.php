<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_hours', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('location_id')->unsigned()->nullable();
            $table->foreign('location_id')->references('id')->on('locations');
            $table->string('name');
            $table->string('code');
            $table->boolean('monday')->default(false);//lunes
            $table->boolean('tuesday')->default(false);//martes
            $table->boolean('wednesday')->default(false);//mircoles
            $table->boolean('thursday')->default(false);//jueves
            $table->boolean('friday')->default(false);//viernes
            $table->boolean('saturday')->default(false);//sabado
            $table->boolean('sunday')->default(false);//domingo
            $table->time('entry');
            $table->time('start_of_entry');
            $table->time('end_of_entry');
            $table->time('tolerance_entry');//tolerancia en atraso
            $table->time('output');
            $table->time('start_of_output');
            $table->time('end_of_output');
            $table->time('tolerance_output');//tolerancia sallida
            $table->enum('work_shift', ['Mañana', 'Tarde', 'Noche'])->nullable(); //Turno de Trabajo
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
        Schema::dropIfExists('type_hours');
    }
}
