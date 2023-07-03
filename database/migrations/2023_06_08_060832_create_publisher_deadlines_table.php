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
            $table->string('PublisherDeadlineWarning_Color');
            $table->string('PublisherDeadlineWarning_Message');
            $table->integer('DaysTilDealineLessThan');
            $table->string('PublisherFollowupWarning_Color');
            $table->string('PublisherFollowupWarning_Message');
            $table->integer('DaysTilFollowupLessThan');
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
