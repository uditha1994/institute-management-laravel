<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('course_has_branch', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('courses', 'course_id');
            $table->foreignId('branch_id')->constrained('branches', 'branch_id');
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_has_branches');
    }
};
