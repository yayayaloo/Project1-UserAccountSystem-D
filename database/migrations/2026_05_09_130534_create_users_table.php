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
        Schema::create('users', function (Blueprint $table) {
            // id — unsignedBigInteger, PRIMARY KEY, AUTO_INCREMENT
            $table->id();
            // first_name — string(50), NOT NULL
            $table->string('first_name', 50);
            // last_name — string(50), NOT NULL
            $table->string('last_name', 50);
            // email — string(100), NOT NULL, UNIQUE constraint to prevent duplicate emails
            $table->string('email', 100)->unique();
            // username — string(50), NOT NULL, UNIQUE constraint to prevent duplicate usernames
            $table->string('username', 50)->unique();
            // password — string, NOT NULL, stores the hashed password value
            $table->string('password');
            // remember_token — string, NULLABLE, used by Laravel for "Remember Me" session handling
            $table->rememberToken();
            // created_at and updated_at — timestamps, managed automatically by Laravel
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations — drops the users table.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
