<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('employee_id')->unsigned(); // id del empeleado
            $table->bigInteger('kinship_id')->unsigned();
            $table->string('first_name'); //primer nombre
            $table->string('second_name'); //segundo nombre
            $table->string('last_name'); //apellido paterno
            $table->string('mother_last_name'); //apellido materno
            $table->string('surname_husband')->nullable(); //apellido casada
            $table->boolean('disability')->default(false); // discapacidad
            $table->boolean('is_reference')->default(false); //apellido casada
            $table->string('phone')->nullable();
            $table->string('cellphone')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('age')->nullable();

            $table->bigInteger('healh_box_id')->unsigned()->nullable();
            $table->foreign('healh_box_id')->references('id')->on('health_boxes');
            $table->string('number_healt_box')->nullable();

            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('kinship_id')->references('id')->on('kinships');

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
        Schema::dropIfExists('families');
    }
}
