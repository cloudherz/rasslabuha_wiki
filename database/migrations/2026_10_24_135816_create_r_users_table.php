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
        Schema::create('r_users', function (Blueprint $table) {
            $table->id('r_user_id')->unique();
            $table->string('login', 256)->nullable();
            $table->string('password', 1024)->nullable();
            $table->string('role', 256)->nullable();
            $table->string('nickname', 256)->nullable();
            $table->string('avatar', 1024)->nullable();
            $table->string('status', 1024)->nullable();
            $table->unsignedInteger('join_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_users');
    }
};
