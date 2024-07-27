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
        if(!Schema::hasTable('newpatients')) {
            Schema::create('newpatients', function (Blueprint $table) {
                $table->bigInteger('newpatients_id')->autoIncrement();
                $table->text('newpatients_name');
                $table->text('newpatients_pnum');
                $table->text('newpatients_dob');
                $table->text('newpatients_rxnum');
                $table->date('newpatients_date');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newpatients');
    }
};
