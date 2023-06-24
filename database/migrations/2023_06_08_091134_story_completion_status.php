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
        Schema::create('story_completion_status', function (Blueprint $table) {
            $table->id('StoryCompletionStatus_ID');
            $table->enum('StoryCompletionStatus_Name', ['Draft', 'Complete','In Progress', 'On Hold'])->default('Draft');
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
        Schema::dropIfExists('story_completion_status');
    }
};