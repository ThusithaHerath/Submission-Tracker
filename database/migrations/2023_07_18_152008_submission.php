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
        Schema::create('submission', function (Blueprint $table) {
            $table->id();
            $table->string('SubmissionDate')->nullable();
            $table->decimal('FeePaid')->nullable();
            $table->decimal('PayReceived')->nullable();
            $table->string('Notes')->nullable();
            $table->json('Custom')->nullable();

            $table->unsignedBigInteger('userID')->nullable();
            $table->foreign('userID')->references('id')->on('users');

            $table->unsignedBigInteger('StoryID')->nullable();
            $table->foreign('StoryID')->references('id')->on('story');

            $table->unsignedBigInteger('PublisherID')->nullable();
            $table->foreign('PublisherID')->references('id')->on('publisher');

            $table->unsignedBigInteger('SubmissionMethodID')->nullable();
            $table->foreign('SubmissionMethodID')->references('id')->on('submission_method');

            $table->unsignedBigInteger('SubmissionStatusID')->nullable();
            $table->foreign('SubmissionStatusID')->references('id')->on('submission_status');

            $table->unsignedBigInteger('SubmissionMethodDefaultID')->nullable();
            $table->foreign('SubmissionMethodDefaultID')->references('id')->on('submission_method_defaults');

            $table->unsignedBigInteger('SubmissionStatusDefaultID')->nullable();
            $table->foreign('SubmissionStatusDefaultID')->references('id')->on('submission_status_defaults');

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
        Schema::dropIfExists('submission');
    }
};