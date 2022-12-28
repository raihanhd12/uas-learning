<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructors', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('nama');                      
            $table->string('keahlihan');
            $table->text('excerpt');
            $table->text('about');            
            $table->string('instagram')->nullable();           
            $table->string('facebook')->nullable();           
            $table->string('twitter')->nullable();          
            $table->string('linkedin')->nullable();          
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
        Schema::dropIfExists('instructors');
    }
}
