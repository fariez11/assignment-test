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
        Schema::create('mst_nilai', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswaId')->constrained('mst_mahasiswa')->onDelete('cascade');
            $table->foreignId('matkulId')->constrained('mst_matkul')->onDelete('cascade');
            $table->foreignId('dosenId')->constrained('mst_dosen')->onDelete('cascade');
            $table->integer('tugas1');
            $table->integer('tugas2');
            $table->integer('UTS');
            $table->integer('tugas3');
            $table->integer('tugas4');
            $table->integer('UAS');
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
        Schema::dropIfExists('mst_nilai');
    }
};
