<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('address_map');
            $table->string('zoom_map');
            $table->string('lat');
            $table->string('lng');
            $table->string('description_short');
            $table->text('description_long');
            $table->string('tags');            
            $table->string('category_id');
            $table->string('user_id');
            $table->string('country_id');
            $table->string('region_id');
            $table->string('city_id')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
