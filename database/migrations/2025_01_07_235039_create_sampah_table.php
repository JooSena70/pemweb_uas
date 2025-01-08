<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sampah', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sampah');
            $table->string('satuan');
            $table->decimal('harga_per_kg', 10, 2);
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sampah');
    }
};