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
        Schema::create('data_diri', function (Blueprint $table) {
            $table->string('nama');
            $table->string('alamat');
            $table->string('tmp_tgl_lahir');
            $table->string('usia');
            $table->string('agama');
            $table->string('tinggi_bdn')->comment('Tinggi badan dalam Cm');
            $table->string('berat_bdn')->comment('Berat badan dalam Kg');
            $table->string('no_telp');
            $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_diri');
    }
};
