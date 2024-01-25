<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() 
    {
        Schema::create('galery_foto', function (Blueprint $table) {
            $table->bigIncrements('FotoID');
            $table->string('JudulFoto');
            $table->text('DeskripsiFoto');
            $table->date('TanggalUnggah');
            $table->string('LokasiFile');
            $table->integer('AlbumID');
            $table->integer('UserID');
            $table->timestamps();
            // $table->foreign('AlbumID')->references('AlbumID')->on('galery_album');
            // $table->foreign('UserID')->references('UserID')->on('galery_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galery_foto');
    }
};
