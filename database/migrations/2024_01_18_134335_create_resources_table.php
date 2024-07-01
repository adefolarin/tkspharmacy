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
        if(!Schema::hasTable('resources')) {
        Schema::create('resources', function (Blueprint $table) {
            $table->bigInteger('resources_id')->autoIncrement();
            $table->bigInteger('resourcecategoriesid');
            $table->text('resources_for');
            $table->text('resources_name');
            $table->text('resources_file');
            $table->date('resources_date');
            $table->timestamps();
        });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resources');
    }
};
