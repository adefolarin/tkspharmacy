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
        if(!Schema::hasTable('campaignregs')) {
        Schema::create('campaignregs', function (Blueprint $table) {
            $table->bigInteger('campaignregs_id')->autoIncrement();
            $table->text('campaignregs_name');
            $table->text('campaignregs_email');
            $table->text('campaignregs_pnum');
            $table->bigInteger('campaignregs_campaign');
            $table->date('campaignregs_date');
            $table->timestamps();
            $table->bigInteger('eventregs_availtime');
        });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaignregs');
    }
};
