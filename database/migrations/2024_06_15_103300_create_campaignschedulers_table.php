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
        if(!Schema::hasTable('campaignschedulers')) {
            Schema::create('campaignschedulers', function (Blueprint $table) {
                $table->bigInteger('campaignschedulers_id')->autoIncrement();
                $table->string('campaignschedulers_time');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaignschedulers');
    }
};
