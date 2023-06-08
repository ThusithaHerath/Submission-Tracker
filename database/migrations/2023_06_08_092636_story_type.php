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
        Schema::create('story_type', function (Blueprint $table) {
            $table->id('StoryType_ID');
            $table->enum('StoryType_Name', [
                'Article',
                'Book',
                'PoemRhyming',
                'PoemNonRhyming',
                'ShortStory',
                'Song'
            ])->default('Book')->nullable();

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
        Schema::dropIfExists('story_type');
    }
};