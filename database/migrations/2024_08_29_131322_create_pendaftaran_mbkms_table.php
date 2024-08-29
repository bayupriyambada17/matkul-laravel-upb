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
        Schema::create('pendaftaran_mbkms', function (Blueprint $table) {
            $table->id();
            $table->string('program_mbkm');
            $table->string('periode');
            $table->string('nama');
            $table->string('nim');
            $table->decimal('ipk', 3, 2);
            $table->integer('total_sks');
            $table->string('cv');
            $table->string('khs');
            $table->string('portofolio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran_mbkms');
    }
};
