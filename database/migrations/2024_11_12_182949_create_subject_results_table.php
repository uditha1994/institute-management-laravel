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
        Schema::create('subject_result', function (Blueprint $table) {
            $table->string('id', 45)->primary();
            $table->foreignId('subject_sub_id')->constrained('subjects', 'sub_id');
            $table->foreignId('result_result_id')->constrained('results', 'result_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subject_results');
    }
};
