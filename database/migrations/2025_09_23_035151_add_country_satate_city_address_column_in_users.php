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
        Schema::table('users', function (Blueprint $table) {
            $table->mediumInteger('country_id')->unsigned()->nullable()->after('is_agreed');
            $table->mediumInteger('state_id')->unsigned()->nullable()->after('country_id');
            $table->mediumInteger('city_id')->unsigned()->nullable()->after('state_id');
            $table->string('zip', 20)->nullable()->after('city_id');
            $table->text('address')->nullable()->after('zip');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('set null');
            $table->foreign('state_id')->references('id')->on('states')->onDelete('set null');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['country_id']);
            $table->dropForeign(['state_id']);
            $table->dropForeign(['city_id']);
            $table->dropColumn(['country_id', 'state_id', 'city_id', 'address', 'zip']);
        });
    }
};
