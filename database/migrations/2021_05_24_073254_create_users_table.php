<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); 
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->integer('age');
            $table->enum('gender', [
                'Male','Female'
            ]);  
            $table->date('birthday');
            $table->integer('contact');
            $table->longText('address');

            $table->softDeletes();
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
        Schema::dropIfExists('users');
    }
}