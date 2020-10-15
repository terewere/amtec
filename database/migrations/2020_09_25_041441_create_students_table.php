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
            $table->id();

        $table->integer('student_id')->unsigned();
          $table->string('session');
          $table->string('group');
          $table->dateTime('birthday');
          $table->string('religion');
          $table->string('father_name');
          $table->string('father_phone_number');
          $table->string('father_national_id');
          $table->string('father_occupation');
          $table->string('mother_name');
          $table->string('mother_phone_number');
          $table->string('mother_national_id');
          $table->string('mother_occupation');
          $table->integer('user_id')->unsigned()->nullable();
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
        Schema::dropIfExists('students');
    }
}
