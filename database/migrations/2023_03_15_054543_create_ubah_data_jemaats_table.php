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
        Schema::create('ubah_data_jemaats', function (Blueprint $table) {
            $table->id();
            $table->integer('nik');
            $table->string('nama');
            $table->string('jk');
            $table->string('tmplhr');
            $table->date('tgllhr');
            $table->string('status baptis');
            $table->date('tglsidi');
            $table->string('nama ayah');
            $table->string('nama ibu');
            $table->string('alamat');
            $table->text('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ubah_data_jemaats');
    }
};
