<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id');
            $table->string('fullname');
            $table->string('designation');
            $table->enum('leave_type',['vacation_leave','parental_leave','study_leave','sick_leave','Maternity_leave']);
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();;
            $table->string('notes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loans');
    }
}