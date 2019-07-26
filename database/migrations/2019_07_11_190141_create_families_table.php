<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('families', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');

            $table->string('relationship');
            $table->integer('student_id');
            
            $table->string('name');
            $table->string('surname');
            $table->string('image')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('cel')->nullable();
            $table->string('tel_home')->nullable();
            $table->string('tel_work')->nullable();


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
        Schema::dropIfExists('families');
    }
}
