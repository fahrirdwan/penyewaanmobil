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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('merk', 50);
            $table->string('model', 50);
            $table->enum('color', ['red','blue','white','silver','gray','black']);
            $table->string('no_plat', 15);
            $table->integer('fee_day');
            $table->string('picture', 128);
            $table->enum('status', ['Available', 'Not Available']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
