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
        Schema::create('class_member', function (Blueprint $table) {
            $table->foreignId('gym_class_id')->constrained();
            $table->foreignId('member_id')->constrained();
            $table->timestamp('registered_at')->useCurrent();
            $table->enum('status', ['registered', 'attended', 'cancelled'])->default('registered');
            $table->primary(['gym_class_id', 'member_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_member');
    }
};
