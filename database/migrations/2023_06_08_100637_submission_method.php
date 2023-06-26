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
        Schema::create('submission_method', function (Blueprint $table) {
            $table->id();
            $table->enum('SubmissionMethod_Name', [
                'PublisherWebsite',
                'Submissions',
                'com',
                'email',
                'fax',
                'mail'
            ])->default('mail')->nullable();
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
        Schema::dropIfExists('submission_method');
    }
};