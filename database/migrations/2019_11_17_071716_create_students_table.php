<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('student_id');
            $table->string('first_name',20);
            $table->string('middle_name',20);
            $table->string('last_name',20);
            $table->boolean('sex');
            $table->date('dob');
            // $table->string('100')->nullable();
            $table->string('email');
            $table->string('status');
            $table->string('nationality',50)->nullable();
            $table->string('phone',50)->nullable();
            $table->string('village',50)->nullable();
            $table->integer('ward');
            $table->string('district',50)->nullable();
            $table->string('province',50)->nullable();
            $table->string('current_address',100)->nullable();
            $table->date('dateregistered');
            $table->integer('user_id')->unsigned();
            $table->string('photo',200)->nullable();
            // $table->foreign('user_id')->references('id')->on('users');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
