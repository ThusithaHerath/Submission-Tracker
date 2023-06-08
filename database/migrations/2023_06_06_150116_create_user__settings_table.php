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
        Schema::create('user__settings', function (Blueprint $table) {
            $table->id();
            $table->string('UserSettingValue_Value');
            $table->string('UserFlexibleSetting_ID');
            $table->string('UserFlexibleSetting_Name');
            $table->string('UserFlexibleSetting_DefaultValue');
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
        Schema::dropIfExists('user__settings');
    }
};
