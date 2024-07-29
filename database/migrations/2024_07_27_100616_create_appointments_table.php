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
        if(!Schema::hasTable('appointments')) {
            Schema::create('appointments', function (Blueprint $table) {
                $table->bigInteger('appointments_id')->autoIncrement();
                $table->text('appointments_name');
                $table->text('appointments_email');
                $table->text('appointments_service');
                $table->date('appointments_date');
                $table->date('appointments_date2');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
