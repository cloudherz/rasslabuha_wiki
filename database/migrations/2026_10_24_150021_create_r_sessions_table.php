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
        Schema::create('r_sessions', function (Blueprint $table) {
            $table->id('r_session_id')->unique();
            $table->unsignedBigInteger('r_user_id')->nullable();
            $table->string('token', 128)->unique();
            $table->string('ip', 256)->nullable();
            $table->string('agent', 1024)->nullable();
            $table->unsignedInteger('creation_date')->nullable();
            $table->unsignedInteger('expiration_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_sessions');
    }
};
