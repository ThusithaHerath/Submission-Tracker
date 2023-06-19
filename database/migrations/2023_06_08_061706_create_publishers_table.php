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
        Schema::create('publishers', function (Blueprint $table) {
            $table->id();
            $table->string('Publisher URL');
            $table->decimal('FeeForSubmission');
            $table->string('HowToSubmit');
            $table->string('Rating');
            $table->boolean('SimultaneousSubmissionAllowed');
            $table->string('Contact');
            $table->date('Deadline DATE');
            $table->string('DeadlineInfo');
            $table->json('Custom');
            $table->unsignedBigInteger('publisher_deadline_id')->nullable();
            $table->foreign('publisher_deadline_id')->references('id')->on('publisher_deadlines');
            $table->unsignedBigInteger('publisher_type_id')->nullable();
            $table->foreign('publisher_type_id')->references('id')->on('publisher_types');
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
        Schema::dropIfExists('publishers');
    }
};
