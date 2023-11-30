<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->string('name');
            $table->string('title');
            $table->string('image');
            $table->string('address_map');
            $table->string('zoom_map');
            $table->string('lat');
            $table->string('lng');
            $table->string('description_short');
            $table->text('description_long');
            $table->string('country_id');
            $table->string('region_id');
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
        Schema::dropIfExists('cities');
    }
}
