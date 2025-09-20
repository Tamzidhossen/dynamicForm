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
        Schema::create('softvances', function (Blueprint $table) {
            $table->id();
            $table->string('brandtitle');
            $table->string('comment')->nullable();
            $table->string('contexttype')->nullable();
            $table->string('videosourcetype')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('softvances');
    }
};
