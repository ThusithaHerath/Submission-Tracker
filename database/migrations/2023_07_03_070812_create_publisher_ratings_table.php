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
        Schema::create('publisher_ratings', function (Blueprint $table) {
            $table->id();
            $table->string('publisher_rating_name');
            $table->integer('publisher_rating_rank');
            $table->unsignedBigInteger('user_ID')->nullable();
            $table->foreign('user_ID')->references('id')->on('users');
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
        Schema::dropIfExists('publisher_ratings');
    }
};
