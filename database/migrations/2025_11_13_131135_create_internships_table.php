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
        Schema::create('internships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recruiter_id')->constrained('recruiters')->onDelete('cascade');
            $table->string('job_category');
            $table->string('title');
            $table->text('description');
            $table->decimal('salary', 10, 2)->nullable();
            $table->string('salary_freq')->nullable(); // e.g., monthly, weekly
            $table->timestamp('created')->useCurrent();
            $table->string('status')->default('open'); // open, closed, etc.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internships');
    }
};
