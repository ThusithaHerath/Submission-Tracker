<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publisher_ratings_defaults', function (Blueprint $table) {
            $table->id();
            $table->string('publisherRatingName');
            $table->integer('publisherRatingRank');
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
        Schema::dropIfExists('publisher_ratings_defaults');
    }
};
