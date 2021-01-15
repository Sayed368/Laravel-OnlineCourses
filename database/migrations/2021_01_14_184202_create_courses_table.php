<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('duration')->nullable();
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->text('image')->nullable();
            $table->unsignedBigInteger("instructor_id")->nullable();
            $table->foreign("instructor_id")->references("id")->on("users")->onUpdate("cascade")->onDelete("cascade");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
