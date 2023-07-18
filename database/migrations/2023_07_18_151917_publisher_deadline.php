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
        Schema::create('publisher_deadline', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('PublisherDeadlineWarningColorId');
            $table->foreign('PublisherDeadlineWarningColorId')->references('id')->on('color');
            $table->integer('PublisherDeadlinePublisherId')->index()->unsigned();
            $table->string('PublisherDeadlineWarningMessage');
            $table->integer('DaysTilDealineLessThan');
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
        Schema::dropIfExists('publisher_deadline');
    }
};
