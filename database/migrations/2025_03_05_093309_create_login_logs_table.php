<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('login_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamp('login_at')->nullable(); // Biarkan nullable agar bisa diisi manual
            $table->timestamps(); // Menambahkan created_at & updated_at
        });
    }

    public function down(): void {
        Schema::dropIfExists('login_logs');
    }
};
