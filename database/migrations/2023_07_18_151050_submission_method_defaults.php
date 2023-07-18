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
        Schema::create('submission_method_defaults', function (Blueprint $table) {
            $table->id();
            $table->enum('SubmissionMethodName', [
                'PublisherWebsite',
                'Submissions.com',
                'Email',
                'Mail',
                'Fax',
            ])->default('mail')->nullable();
            $table->integer('SubmissionMethodUserId')->unsigned()->nullable();
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
        Schema::dropIfExists('submission_method_defaults');
    }
};
