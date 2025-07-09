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
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('code'); // Mã xác nhận đặt lại mật khẩu
            $table->timestamp('expires_at'); // Thời gian hết hạn của mã xác nhận
            $table->timestamp('used_at')->nullable(); // Thời gian sử dụng mã xác nhận
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('password_reset_tokens');
    }
};
