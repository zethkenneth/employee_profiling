<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('employees', function($table) {
            $table->increments('employee_id');
            $table->string('employee_lastname');
            $table->string('employee_firstname');
            $table->string('employee_middlename');
            $table->string('employee_extname');
            $table->integer('fk_department_id')->unsigned();
            $table->integer('fk_position_id')->unsigned();
            $table->foreign('fk_department_id')->references('department_id')->on('departments');
            $table->foreign('fk_position_id')->references('position_id')->on('positions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('employees');
    }
};
