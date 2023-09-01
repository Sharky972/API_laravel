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
        Schema::disableForeignKeyConstraints();

        Schema::create('capacities', function (Blueprint $table) {
            $table->id();
            $table->char('name');
            $table->bigInteger('color');
            $table->bigInteger('cost_id')->unsigned();
            $table->foreign('cost_id')->references('id')->on('costs');
            $table->char('type');
            $table->bigInteger('damage');
            $table->char('faIcon');
            $table->char('spellIcon');
            $table->char('description');
            $table->bigInteger('champions_id')->unsigned();
            $table->foreign('champions_id')->references('id')->on('champions');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capacities');
    }
};
