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
            $table->unsignedBigInteger('Story_ID_Child')->nullable();
            $table->foreign('Story_ID_Child')->references('Story_ID')->on('story');
            $table->unsignedBigInteger('Story_ID_Parent')->nullable();
            $table->foreign('Story_ID_Parent')->references('Story_ID')->on('story');
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