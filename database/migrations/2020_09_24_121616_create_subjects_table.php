<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject_name');
            $table->integer('class_id')->unsigned();
            $table->string('subject_time');
            $table->integer('class_test_count');
            $table->integer('home_work_count');
            $table->integer('class_test_percent');
            $table->integer('attendance_percent');
            $table->integer('home_work_percent');
            $table->integer('final_exam_percent');
            $table->integer('class_test_fullmark');
            $table->integer('final_fullmark');
            $table->integer('exam_id')->unsigned();
            $table->integer('teacher_id')->unsigned();
            $table->integer('user_id')->unsigned();
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
        Schema::dropIfExists('subjects');
    }
}
