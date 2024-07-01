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
        if(!Schema::hasTable('contacts')) {
            Schema::create('contacts', function (Blueprint $table) {
                $table->bigInteger('contacts_id')->autoIncrement();
                $table->text('contacts_name');
                $table->text('contacts_email');
                $table->text('contacts_pnum');
                $table->text('contacts_subject');
                $table->text('contacts_message');
                $table->date('contacts_date');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
