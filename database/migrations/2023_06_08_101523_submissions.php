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
        Schema::create('submissions', function (Blueprint $table) {
            $table->id();
            $table->string('SubmissionDate')->nullable();
            $table->string('FeePaid')->nullable();
            $table->string('PayReceived')->nullable();
            $table->string('Notes')->nullable();
            $table->json('Custom');

            $table->unsignedBigInteger('user_ID)')->nullable();
            $table->foreign('user_ID)')->references('id')->on('users');

            $table->unsignedBigInteger('Story_ID')->nullable();
            $table->foreign('Story_ID')->references('Story_ID')->on('story');

            $table->unsignedBigInteger('Publisher_ID')->nullable();
            $table->foreign('Publisher_ID')->references('id')->on('publishers');

            $table->unsignedBigInteger('SubmissionMethod_ID')->nullable();
            $table->foreign('SubmissionMethod_ID')->references('SubmissionMethod_ID')->on('submission_method');

            $table->unsignedBigInteger('SubmissionStatus_ID')->nullable();
            $table->foreign('SubmissionStatus_ID')->references('SubmissionStatus_ID')->on('submission_status');

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
        Schema::dropIfExists('submissions');
    }
};