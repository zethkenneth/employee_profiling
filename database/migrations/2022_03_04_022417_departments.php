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
        // Schema::create('departments', function($table) {
        //     $table->increments('employee_id');
        //     $table->string('employee_lastname');
        //     $table->string('employee_firstname');
        //     $table->string('employee_middlename');
        //     $table->string('employee_extname');
        // });

        Schema::create('departments', function($table) {
            $table->increments('department_id');
            $table->string('department_name');
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
        Schema::dropIfExists('departments');
    }
};
