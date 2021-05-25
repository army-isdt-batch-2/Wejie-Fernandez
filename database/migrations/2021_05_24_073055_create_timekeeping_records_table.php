<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimekeepingRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timekeeping_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id')->index();
            $table->date('clock_in');
            $table->date('clock_out');
            $table->integer('total');
            $table->unsignedBigInteger('timekeeping_id')->index();


            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('timekeeping_id')->references('id')->on('timekeeping');
           
           
           
           
            $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timekeeping_records');
    }
}