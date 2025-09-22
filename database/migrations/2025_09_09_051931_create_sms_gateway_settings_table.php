<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sms_gateway_settings', function (Blueprint $table) {
            $table->id();
            $table->string('gateway_name');
            // Twilio settings
            $table->string('twilio_sid')->nullable();
            $table->string('twilio_auth_token')->nullable();
            $table->string('twilio_number')->nullable();

            // Vonage / Nexmo settings
            $table->string('vonage_nexmo_key')->nullable();
            $table->string('vonage_nexmo_secret')->nullable();
            $table->string('vonage_nexmo_brand')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sms_gateway_settings');
    }
};
