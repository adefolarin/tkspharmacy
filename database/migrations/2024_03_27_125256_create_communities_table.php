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
        if(!Schema::hasTable('communities')) {
            Schema::create('communities', function (Blueprint $table) {
                $table->bigInteger('communities_id')->autoIncrement();
                $table->text('communities_name');
                $table->text('communities_email');
                $table->text('communities_pnum');
                $table->text('communities_orgname');
                $table->text('communities_country');
                $table->text('communities_state');
                $table->text('communities_city');
                $table->text('communities_address');
                $table->date('communities_outreachdate');
                $table->text('communities_outreachtime');
                $table->text('communities_req');
                $table->text('communities_how');
                $table->date('communities_date');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('communities');
    }
};
