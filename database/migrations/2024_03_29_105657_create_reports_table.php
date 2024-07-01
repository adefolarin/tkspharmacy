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
        if(!Schema::hasTable('reports')) {
            Schema::create('reports', function (Blueprint $table) {
                $table->bigInteger('reports_id')->autoIncrement();
                $table->bigInteger('resourcecategoriesid');
                $table->text('reports_for');
                $table->text('reports_name');
                $table->text('reports_file');
                $table->date('reports_date');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
