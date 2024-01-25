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
        Schema::create('galery_album', function (Blueprint $table) {
            $table->bigIncrements('AlbumID');
            $table->string('NamaAlbum', 225);
            $table->text('Deskripsi');
            $table->date('TanggalDiBuat');
            $table->integer('UserID');
            $table->timestamps();

            // $table->foreign('UserID')->references('UserID')->on('galery_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galery_album');
    }
};
