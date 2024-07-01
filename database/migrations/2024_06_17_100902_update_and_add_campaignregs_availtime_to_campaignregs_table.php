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
        Schema::table('campaignregs', function (Blueprint $table) {
            if (Schema::hasTable('campaignregs')){
                $table->string('campaignregs_availtime');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('campaignregs', function (Blueprint $table) {
            //
        });
    }
};
