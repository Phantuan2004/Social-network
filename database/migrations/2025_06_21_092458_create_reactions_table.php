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
        Schema::create('reactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('post_id')->constrained('posts')->onDelete('cascade');
            $table->unique(['user_id', 'post_id']);
            $table->enum('type', ['like', 'love', 'haha', 'wow', 'sad', 'angry']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.`
     */
    public function down(): void
    {
        Schema::dropIfExists('reactions');
    }
};
