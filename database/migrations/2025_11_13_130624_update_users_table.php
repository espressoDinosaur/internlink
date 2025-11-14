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
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('user'); // default role
            $table->string('profile_photo_path')->nullable();
            $table->string('status')->default('active');

            // Optional: remove the name column if you don't need it
            $table->dropColumn('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Rollback: add the name column back
            $table->string('name');

            // Remove the columns we added
            $table->dropColumn(['role', 'profile_photo_path', 'status']);
        });
    }
};
