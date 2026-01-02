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
    Schema::create('penimbangans', function (Blueprint $table) {
        $table->id();
        $table->foreignId('anak_id')->constrained('anaks')->cascadeOnDelete();
        $table->date('tanggal');
        $table->decimal('berat_badan', 5, 2); // kg
        $table->decimal('tinggi_badan', 5, 2); // cm
        $table->string('keterangan')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penimbangans');
    }
};
