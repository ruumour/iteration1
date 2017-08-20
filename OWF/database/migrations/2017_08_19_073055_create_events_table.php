<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->integer('id');
            $table->string('title');
            $table->text('description');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('address');
            $table->float('lat');
            $table->float('lng');
            $table->integer('category_id')->references('id')->on('users');
            $table->string('parent_category');
            $table->text('url');
            $table->text('image_url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
