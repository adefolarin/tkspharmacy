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
        if(!Schema::hasTable('transfers')) {
            Schema::create('transfers', function (Blueprint $table) {
                $table->bigInteger('transfers_id')->autoIncrement();
                $table->text('transfers_patname');
                $table->text('transfers_patpnum');
                $table->text('transfers_patemail');
                $table->text('transfers_patdob');
                $table->text('transfers_pharmname');
                $table->text('transfers_pharmnum');
                $table->text('transfers_rxnum');
                $table->text('transfers_med');
                $table->text('transfers_note');
                $table->date('transfers_date');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfers');
    }
};
