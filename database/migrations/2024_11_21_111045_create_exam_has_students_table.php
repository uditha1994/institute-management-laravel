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
        Schema::create('exam_has_students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exam_id')->
                constrained('exams', 'exam_id');
            $table->foreignId('stu_id')->
                constrained('students', 'stu_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_has_students');
    }
};
