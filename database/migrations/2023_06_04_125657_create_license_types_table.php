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
        Schema::create('license_type', function (Blueprint $table) {
            $table->id();
            $table->string('LicenseType_Name');
            $table->integer('DaysDuration');
            $table->integer('DaysAfterExpirationToDeleteUser');
            $table->integer('MaxStories');
            $table->integer('MaxPublishers');
            $table->integer('MaxSubmissions');
            $table->decimal('License_Price');
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
        Schema::dropIfExists('license_type');
    }
};
