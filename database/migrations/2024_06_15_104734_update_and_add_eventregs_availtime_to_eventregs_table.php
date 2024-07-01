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
        Schema::table('eventregs', function (Blueprint $table) {
            if (Schema::hasTable('eventregs')){
                $table->string('eventregs_availtime');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('eventregs', function (Blueprint $table) {
            //
        });
    }
};
