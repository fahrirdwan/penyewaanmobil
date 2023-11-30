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
        $table->id();
        $table->unsignedInteger('user_id');
        $table->unsignedInteger('product_id');
        $table->enum('keterangan', ['Meminjam', 'Mengembalikan']);
        $table->timestamps();

        $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history');
    }
};
