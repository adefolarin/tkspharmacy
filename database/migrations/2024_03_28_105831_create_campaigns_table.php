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
        if(!Schema::hasTable('campaigns')) {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->bigInteger('campaigns_id')->autoIncrement();
            $table->bigInteger('campaigncategoriesid');
            $table->text('campaigns_title');
            $table->text('campaigns_desc');
            $table->text('campaigns_file');
            $table->dateTime('campaigns_startdate');
            $table->dateTime('campaigns_enddate');
            $table->text('campaigns_venue');
            $table->text('campaigns_address');
            $table->text('campaigns_organizer');
            $table->text('campaigns_preacher');
            $table->date('campaigns_date');
            $table->timestamps();
        });
      }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
