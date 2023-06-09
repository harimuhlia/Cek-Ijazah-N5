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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap');
            $table->string('NISN')->unique();
            $table->string('jurusan');
            $table->foreign('jurusan')->references('nama_jurusan')->on('jurusans')->onDelete('cascade')->onUpdate('cascade');
            // $table->unsignedBigInteger('jurusan');
            // $table->foreign('jurusan')->references('id')->on('jurusans')->onDelete('cascade')->onUpdate('cascade');
            $table->string('tempatlahir')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->string('wali')->nullable();
            $table->string('thn_masuk')->nullable();
            $table->string('thn_lulus')->nullable();
            $table->string('no_ijazah')->nullable();
            $table->string('asalsekolah')->nullable();
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
        Schema::dropIfExists('siswas');
    }
};
