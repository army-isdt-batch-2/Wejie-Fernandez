<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->binary('photo');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->integer('contact');
            $table->string('address');
            $table->date('birthday');
            $table->enum('gender',['Male','Female']);
            $table->string('designation');
            $table->integer('basic_rate');
            $table->unSignedBigInteger('department_id')->index();
            $table->unSignedBigInteger('sss_id')->index();
            $table->unSignedBigInteger('ph_id')->index();
            $table->unSignedBigInteger('pi_id')->index();
            $table->unSignedBigInteger('tax_id')->index();
            $table->integer('employee_id');


            $table->foreign('department_id')->references('id')->on('department');
            $table->foreign('sss_id')->references('id')->on('deductions');
            $table->foreign('ph_id')->references('id')->on('deductions');
            $table->foreign('pi_id')->references('id')->on('deductions');
            $table->foreign('tax_id')->references('id')->on('deductions');
            
            
            
            
            
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
        Schema::dropIfExists('employees');
    }
}