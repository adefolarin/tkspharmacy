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
        if(!Schema::hasTable('refills')) {
            Schema::create('refills', function (Blueprint $table) {
                $table->bigInteger('refills_id')->autoIncrement();
                $table->text('refills_name');
                $table->text('refills_pnum');
                $table->text('refills_dob');
                $table->text('refills_rxnum');
                $table->text('refills_mod');
                $table->text('refills_lod');
                $table->text('refills_refid');
                $table->date('refills_date');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refills');
    }
};
