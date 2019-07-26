<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');

            $table->string('name');
            $table->string('surname');
            $table->string('age');
            $table->string('image')->nullable();
            $table->string('tel')->nullable();
            $table->string('cel')->nullable();
            
            //$table->string('document');
            $table->string('enrollment')->nullable();

            $table->longText('health_problems')->nullable();
            $table->string('remedies')->nullable();
            $table->string('vaccinations')->nullable();
            $table->string('medical_society')->nullable();
            $table->string('tel_medical_society')->nullable();

            $table->integer('school_id');
            $table->integer('group_id');

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
