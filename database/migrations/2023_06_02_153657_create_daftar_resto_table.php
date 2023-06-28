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
        Schema::create('daftar_resto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nama_resto');
            $table->string('alamat');
            $table->string('status');
            $table->integer('operasional');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_resto');
    }
};
