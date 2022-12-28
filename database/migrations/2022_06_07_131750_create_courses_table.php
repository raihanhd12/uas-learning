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
            $table->foreignId('course_category_id');
            $table->foreignId('course_level_id');  
            $table->foreignId('course_price_id');  
            $table->foreignId('instructor_id');   
            $table->string('image')->nullable();                     
            $table->string('title');  
            $table->text('excerpt');           
            $table->text('excerptitle');           
            $table->text('deskripsi');
            $table->text('learn');   
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
        Schema::dropIfExists('courses');
    }
}
