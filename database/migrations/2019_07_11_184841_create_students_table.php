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
            $table->string('image');
            $table->string('cel');
            
            //$table->string('document');
            $table->string('enrollment');

            $table->longText('health_problems');
            $table->string('remedies');
            $table->string('vaccinations');
            $table->string('medical_society');
            $table->string('tel_medical_society');

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
