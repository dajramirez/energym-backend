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
        Schema::create('exercise_workout_plan', function (Blueprint $table) {
            $table->foreignId('workout_plan_id')->constrained();
            $table->foreignId('exercise_id')->constrained();
            $table->integer('sets');
            $table->integer('reps');
            $table->integer('rest')->comment('Rest in seconds');
            $table->string('day')->comment('e.g. Monday, Tuesday or Week 1');
            $table->primary(['workout_plan_id', 'exercise_id', 'day']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercise_workout_plan');
    }
};
