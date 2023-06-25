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
            $table->string('Story_Name')->nullable();
            $table->integer('Lines')->nullable();
            $table->integer('Words')->nullable();
            $table->string('Summary')->nullable();
            $table->unsignedBigInteger('StoryStatus_ID')->nullable();
            $table->foreign('StoryStatus_ID')->references('StoryCompletionStatus_ID')->on('story_completion_status');
            $table->unsignedBigInteger('StoryType_ID')->nullable();
            $table->foreign('StoryType_ID')->references('StoryType_ID')->on('story_type');
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