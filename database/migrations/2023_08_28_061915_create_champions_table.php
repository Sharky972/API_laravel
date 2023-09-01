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
        Schema::create('champions', function (Blueprint $table) {
            $table->id();
            $table->char('avatar');
            $table->char('name');
            $table->bigInteger('pv');
            $table->bigInteger('pvMax');
            $table->bigInteger('mana');
            $table->bigInteger('manaMax');
            $table->bigInteger('isInvincible')->nullable();
            $table->bigInteger('isDead');
            $table->char('class');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('champions');
    }
};
