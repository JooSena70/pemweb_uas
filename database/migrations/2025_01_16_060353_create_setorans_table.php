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
        Schema::create('setorans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_user');
            $table->string('nama_sampah');
            $table->float('berat');
            $table->string('alamat');
            $table->enum('status',['Sudah di verifikasi','Belum di verifikasi']);
            $table->date('tanggal');
            $table->string('total');

            $table->unsignedBigInteger('id_sampah')->nullable();

            // Definisikan relasi foreign key
            $table->foreign('id_sampah')
                  ->references('id')->on('sampah')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setorans');
    }
};
