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
        if(!Schema::hasTable('conditions')) {
            Schema::create('conditions', function (Blueprint $table) {
                $table->bigInteger('conditions_id')->autoIncrement();
                $table->text('conditions_name');
                $table->text('conditions_email');
                $table->text('conditions_pnum');
                $table->text('conditions_address');
                $table->text('conditions_type');
                $table->text('conditions_desc');
                $table->text('conditions_treatment');
                $table->text('conditions_treatmentcost');
                $table->text('conditions_fundreason')->null();
                $table->text('conditions_fundgoal')->null();
                $table->date('conditions_funddeadline')->null();
                $table->text('conditions_meddoc')->null();
                $table->text('conditions_findoc')->null();
                $table->text('conditions_consent')->null();
                $table->date('conditions_date');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conditions');
    }
};
