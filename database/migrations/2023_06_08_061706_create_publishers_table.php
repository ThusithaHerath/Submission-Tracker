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
            $table->string('Publisher');
            $table->boolean('SimultaneousSubmissionAllowed');
            $table->string('Rating');
            $table->date('DeadlineDATE');
            $table->string('Contact');
            $table->string('Notes')->nullable();
            $table->integer('Tot_submissions')->nullable();
            $table->integer('Tot_accepted')->nullable();
            $table->string('Publisher URL')->nullable();
            $table->decimal('FeeForSubmission')->nullable();
            $table->string('HowToSubmit')->nullable();
            $table->string('DeadlineInfo')->nullable();
            $table->json('Custom')->nullable();
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
