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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('intern_id')->constrained('interns')->onDelete('cascade');
            $table->string('exp_title');
            $table->string('exp_company');
            $table->string('exp_address')->nullable();
            $table->string('start_month')->nullable();
            $table->year('start_year')->nullable();
            $table->string('end_month')->nullable();
            $table->year('end_year')->nullable();
            $table->text('role_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
