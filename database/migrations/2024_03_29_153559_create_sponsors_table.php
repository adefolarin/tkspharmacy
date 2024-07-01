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
        if(!Schema::hasTable('sponsors')) {
        Schema::create('sponsors', function (Blueprint $table) {
            $table->bigInteger('sponsors_id')->autoIncrement();
            $table->string('sponsors_name');
            $table->string('sponsors_email')->unique();
            $table->string('sponsors_profession');
            $table->string('sponsors_type');
            $table->string('sponsors_period');
            $table->decimal('sponsors_amount',10,2);
            $table->string('sponsors_password');
            $table->timestamps();
        });
    }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sponsors');
    }
};
