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
        Schema::create('poojas', function (Blueprint $table) {
            $table->id();
            $table->string('morning_open');
            $table->string('morning_close');
            $table->string('evening_open');
            $table->string('evening_close');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poojas');
    }
};
