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
      if(!Schema::hasTable('campaigncategories')) {
        Schema::create('campaigncategories', function (Blueprint $table) {
            $table->bigInteger('campaigncategories_id')->autoIncrement();
            $table->text('campaigncategories_name')->unique();
            $table->timestamps();
        });
      }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigncategories');
    }
};
