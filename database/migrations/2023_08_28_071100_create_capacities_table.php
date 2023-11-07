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
            $table->string('name');
            $table->string('color');
            $table->bigInteger('cost_id')->unsigned();
            $table->foreign('cost_id')->references('id')->on('costs');
            $table->string('type');
            $table->bigInteger('damage');
            $table->string('faIcon');
            $table->string('spellIcon');
            $table->string('description');
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
