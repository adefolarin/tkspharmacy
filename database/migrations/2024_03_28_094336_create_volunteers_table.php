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
        if(!Schema::hasTable('volunteers')) {
            Schema::create('volunteers', function (Blueprint $table) {
                $table->bigInteger('volunteers_id')->autoIncrement();
                $table->text('volunteers_name');
                $table->text('volunteers_email');
                $table->text('volunteers_pnum');
                $table->text('volunteers_mailaddress');
                $table->datetime('volunteers_time');
                $table->text('volunteers_skill');
                $table->text('volunteers_qual');
                $table->text('volunteers_exp');
                $table->text('volunteers_lang');
                $table->text('volunteers_interest');
                $table->text('volunteers_training');
                $table->text('volunteers_emergcontact');
                $table->text('volunteers_emergrel');
                $table->text('volunteers_emergcontactinfo');
                $table->text('volunteers_medinfo');
                $table->text('volunteers_ref');
                $table->text('volunteers_check');
                $table->date('volunteers_date');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volunteers');
    }
};
