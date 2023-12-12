<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsLikesTable extends Migration
{
    public function up()
    {
        Schema::create('blogs_likes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('blog_id');
            // Add any other columns needed for tracking likes
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('blog_id')->references('id')->on('posts')->onDelete('cascade');
            // Add foreign key constraints if necessary
        });
    }

    public function down()
    {
        Schema::dropIfExists('blogs_likes');
    }
}
