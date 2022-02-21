<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalaryScalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary_scales', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('class');
            $table->string('level');
            $table->integer('number');
            $table->decimal('salary',13,2);
            $table->decimal('cost',13,2);
            $table->decimal('colateral',13,2);
            $table->decimal('total',13,2);
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
        Schema::dropIfExists('salary_scales');
    }
}
