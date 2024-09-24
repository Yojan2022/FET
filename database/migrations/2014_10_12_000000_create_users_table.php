<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * This method creates the 'users' table with standard fields for user management.
     * Includes fields for email verification, last login tracking, and more.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // Primary Key: Auto-incrementing ID
            $table->id();

            // User's name
            $table->string('username');

            // Unique email for authentication and identification
            $table->string('email')->unique();

            // Timestamp when the email was verified, nullable because not all users verify their email immediately
            $table->timestamp('email_verified_at')->nullable();

            // User's password, typically hashed using Laravel's built-in hashing system
            $table->string('password');

            // Tracks the last login timestamp, nullable because it might be null for newly registered users
            $table->timestamp('last_login_at')->nullable();

            // Token for "Remember Me" functionality during login, stores a secure token
            $table->rememberToken();

            // Timestamps: includes created_at and updated_at fields
            $table->timestamps();

            // Soft Deletes: allows to mark the user as deleted without physically removing the data from the database
            $table->softDeletes(); // Adds a deleted_at timestamp field
        });
    }

    /**
     * Reverse the migrations.
     *
     * Drops the 'users' table.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}
