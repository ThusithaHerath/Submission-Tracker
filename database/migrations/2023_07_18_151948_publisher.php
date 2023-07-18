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
        Schema::create('publisher', function (Blueprint $table) {
            $table->id();
            $table->string('Publisher');
            $table->boolean('SimultaneousSubmissionAllowed');
            $table->date('DeadlineDate');
            $table->string('Contact');
            $table->string('Notes')->nullable();
            $table->integer('TotSubmissions')->nullable();
            $table->integer('Totaccepted')->nullable();
            $table->string('PublisherURL')->nullable();
            $table->decimal('FeeForSubmission')->nullable();
            $table->string('HowToSubmit')->nullable();
            $table->string('DeadlineInfo')->nullable();
            $table->json('Custom')->nullable();
            $table->unsignedBigInteger('publisherRatingId');
            $table->foreign('publisherRatingId')->references('id')->on('publisher_ratings');
            $table->unsignedBigInteger('publisherDeadlineId')->nullable();
            $table->foreign('publisherDeadlineId')->references('id')->on('publisher_deadline');
            $table->unsignedBigInteger('publisherTypeId')->nullable();
            $table->foreign('publisherTypeId')->references('id')->on('publisher_type');
            $table->unsignedBigInteger('publisherRatingDefaultId')->nullable();
            $table->foreign('publisherRatingDefaultId')->references('id')->on('publisher_ratings_defaults');
            $table->unsignedBigInteger('publisherTypeDefaultId')->nullable();
            $table->foreign('publisherTypeDefaultId')->references('id')->on('publisher_type_defaults');
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
        Schema::dropIfExists('publisher');
    }
};
