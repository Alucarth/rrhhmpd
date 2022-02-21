<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approves', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('employee_request_id')->unsigned();
            $table->foreign('employee_request_id')->references('id')->on('employee_requests'); //empleado solicitante

            $table->bigInteger('position_id')->unsigned();
            $table->foreign('position_id')->references('id')->on('positions'); //cargo destinado a aprovacion

            $table->enum('state', ['Pendiente','Aprobado', 'Rechazado']); //estado
            $table->date('date');
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
        Schema::dropIfExists('approves');
    }
}
