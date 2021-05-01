<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->timestamps();
            $table->string('category_id')->foreign('category_id')->nullable()->constrained();
            $table->string('title');
            $table->string('language');
            $table->string('sub_category')->nullable();
            $table->longText('content');
            $table->longText('description');
            $table->integer('is_popular')->default(0);
            $table->longText('post_image')->default(false);
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
