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
        Schema::create('license_types', function (Blueprint $table) {
            $table->id();
            $table->string('LicenseType_ID')->unique();
            $table->string('LicenseType_Name');
            $table->string('DaysDuration');
            $table->string('DaysAfterExpirationToDeleteUser');
            $table->string('MaxStories');
            $table->string('MaxPublishers');
            $table->string('MaxSubmissions');
            $table->string('License_Price');
            $table->string('License_PayPeriod');
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
        Schema::dropIfExists('license_types');
    }
};
