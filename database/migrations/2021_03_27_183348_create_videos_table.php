<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->longText('url');
            $table->string('category_id')->foreign('category_id')->nullable()->constrained();
            $table->string('title');
            $table->string('language');
            $table->string('sub_category')->nullable();
            $table->string('date_release')->nullable();
            $table->string('artists');
            $table->longText('description');
            $table->longText('duration')->nullable();
            $table->longText('video_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
