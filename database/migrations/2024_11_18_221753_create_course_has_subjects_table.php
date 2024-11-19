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
        Schema::create('course_has_subject', function (Blueprint $table) {
            $table->string('id');
            $table->foreignId('course_course_id')->constrained('courses', 'course_id');
            $table->foreignId('subject_sub_id')->constrained('subjects', 'sub_id');
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_has_subjects');
    }
};
