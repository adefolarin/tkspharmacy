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
        if(!Schema::hasTable('eventschedulers')) {
            Schema::create('eventschedulers', function (Blueprint $table) {
                $table->bigInteger('eventschedulers_id')->autoIncrement();
                $table->string('eventschedulers_time');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventschedulers');
    }
};
