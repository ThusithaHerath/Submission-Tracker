<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('story', function (Blueprint $table) {
            $table->id();
            $table->string('StoryName')->nullable();
            $table->integer('Lines')->nullable();
            $table->integer('Words')->nullable();
            $table->string('Summary')->nullable();
            $table->string('IsLock')->default('1');
            $table->unsignedBigInteger('StoryStatusID')->nullable();
            $table->foreign('StoryStatusID')->references('id')->on('story_completion_status');
            $table->unsignedBigInteger('StoryTypeID')->nullable();
            $table->foreign('StoryTypeID')->references('id')->on('story_type');
            $table->unsignedBigInteger('StoryStatusDefaultID')->nullable();
            $table->foreign('StoryStatusDefaultID')->references('id')->on('story_completion_status_defaults');
            $table->unsignedBigInteger('StoryTypeDefaultID')->nullable();
            $table->foreign('StoryTypeDefaultID')->references('id')->on('story_type_defaults');
            $table->unsignedBigInteger('userID')->nullable();
            $table->foreign('userID')->references('id')->on('users');
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
        Schema::dropIfExists('story');
    }
};