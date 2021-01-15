<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_courses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger("student_id")->nullable();
            $table->foreign("student_id")->references("id")->on("users")->onUpdate("cascade")->onDelete("cascade");
            $table->unsignedBigInteger("course_id")->nullable();
            $table->foreign("course_id")->references("id")->on("courses")->onUpdate("cascade")->onDelete("cascade");
            $table->timestamp('enroll_date')->nullable();
            $table->timestamp('feedback_date')->nullable();
            $table->string('feedback')->nullable();
            $table->text('comment')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_courses');
    }
}
