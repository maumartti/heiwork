<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->string('status',10);
            $table->string('name');
            $table->string('subtitle')->nullable();
            $table->string('email', 30)->unique();
            $table->string('tel')->nullable();
            $table->string('cel')->nullable();
            $table->string('image')->nullable();
            $table->string('country');
            $table->string('city');
            $table->string('address')->nullable();
            $table->longText('description')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
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
        Schema::dropIfExists('companys');
    }
}
