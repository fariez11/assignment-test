<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userId')->constrained('mst_user')->onDelete('cascade');
            $table->integer('nim');
            $table->foreignId('jurusanId')->constrained('mst_jurusan')->onDelete('cascade');
            $table->string('nama');
            $table->string('alamat');
            $table->string('kota');
            $table->string('kontak');
            $table->enum('status',['aktif','non aktif']);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mst_mahasiswa');
    }
};
