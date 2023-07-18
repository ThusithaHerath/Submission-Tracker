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
        Schema::create('story_version_ofAnother_story', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('StoryIDChild')->nullable();
            $table->foreign('StoryIDChild')->references('id')->on('story');
            $table->unsignedBigInteger('StoryIDParent')->nullable();
            $table->foreign('StoryIDParent')->references('id')->on('story');
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
        Schema::dropIfExists('story_version_ofAnother_story');
    }
};