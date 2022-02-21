<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKinshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kinships', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //tipo de parentesco  hijo hija Tio Abuelo
            $table->boolean('is_reference')->default(false); //apellido casada
            $table->string('phone')->nullable();
            $table->string('cellphone')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('age')->nullable();
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
        Schema::dropIfExists('kinships');
    }
}
