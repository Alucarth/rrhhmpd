<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_employees', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('employee_id')->unsigned();
            $table->foreign('employee_id')->references('id')->on('employees'); //empleado
            $table->bigInteger('biometric_id')->unsigned();
            $table->foreign('biometric_id')->references('id')->on('biometrics'); //biometrico
            $table->bigInteger('biometric_code'); //badge number
            $table->date('date');
            $table->time('time');
            $table->time('delayed');
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
        Schema::dropIfExists('attendance_employees');
    }
}
